<?php
function fnf_counter(){
    register_post_type('counter',
    array(
        'labels' => array(
            'name' => ('Counters'),
            'singular_name' => ('Counter'),
            'add_new' => ('Add New Counter'),
            'add_new_item' => ('Add New Counter'),
            'edit_item' => ('edit Counter'),
            'new_item' => ('New Counter'),
            'view_item' => (' view Counter'),
            'not_found' => ('sorry, we cold not found'),
        ),
        'menu_icon' => 'dashicons-images-alt',
        'public' => false,
        'public_quearable' => false,
        'exclude_from_search' => true,
        'menu_position' => 8,
        'has_archive' => false,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Counter'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'fnf_counter');


// Meta Box Class: CounterMetaBox
// Get the field value: $metavalue = get_post_meta( $post_id, $field_id, true );
class CounterMetaBox{

	private $screen = array(
		'counter',
                        
	);

	private $meta_fields = array(
                array(
                    'label' => 'How much',
                    'id' => 'counter_lenth',
                    'type' => 'number',
                )

	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'Counter',
				__( 'Counter', 'textdomain' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'normal',
				'default'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'Counter_data', 'Counter_nonce' );
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				if ( isset( $meta_field['default'] ) ) {
					$meta_value = $meta_field['default'];
				}
			}
			switch ( $meta_field['type'] ) {
				default:
                                    $input = sprintf(
                                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                                        $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                                        $meta_field['id'],
                                        $meta_field['id'],
                                        $meta_field['type'],
                                        $meta_value
                                    );
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}

	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['Counter_nonce'] ) )
			return $post_id;
		$nonce = $_POST['Counter_nonce'];
		if ( !wp_verify_nonce( $nonce, 'Counter_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}

if (class_exists('CounterMetabox')) {
	new CounterMetabox;
};