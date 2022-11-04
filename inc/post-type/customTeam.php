<?php
function fnf_team(){
    register_post_type('team',
    array(
        'labels' => array(
            'name' => ('Teams'),
            'singular_name' => ('Team'),
            'add_new' => ('Add New Team Member'),
            'add_new_item' => ('Add New Team Memnber'),
            'edit_item' => ('Edit Team'),
            'new_item' => ('New Team'),
            'view_item' => (' view Team'),
            'not_found' => ('sorry, we cold not found'),
        ),
        'menu_icon' => 'dashicons-images-alt',
        'public' => false,
        'public_quearable' => false,
        'exclude_from_search' => true,
        'menu_position' => 9,
        'has_archive' => false,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'team'),
        'supports' => array('title', 'thumbnail', 'editor',),
		// 'taxonomies' => array( 'Team Category', 'post_tag' ),
        )
    );
    add_theme_support('post-thumbnails');


	
}

add_action('init', 'fnf_team');


/**
 * Create two taxonomies, Team Categorys and Team Tags for the post type "team".
 *
 * @see register_post_type() for registering custom post types.
 */
function fnf_team_cat() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Team Categorys', 'taxonomy general name', 'fnfnetwork' ),
		'singular_name'     => _x( 'Team Category', 'taxonomy singular name', 'fnfnetwork' ),
		'search_items'      => __( 'Search Team Categorys', 'fnfnetwork' ),
		'all_items'         => __( 'All Team Categorys', 'fnfnetwork' ),
		'parent_item'       => __( 'Parent Team Category', 'fnfnetwork' ),
		'parent_item_colon' => __( 'Parent Team Category:', 'fnfnetwork' ),
		'edit_item'         => __( 'Edit Team Category', 'fnfnetwork' ),
		'update_item'       => __( 'Update Team Category', 'fnfnetwork' ),
		'add_new_item'      => __( 'Add New Team Category', 'fnfnetwork' ),
		'new_item_name'     => __( 'New Team Category Name', 'fnfnetwork' ),
		'menu_name'         => __( 'Team Category', 'fnfnetwork' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Team Category' ),
	);

	register_taxonomy( 'Team Category', array( 'team' ), $args );

	unset( $args );
	unset( $labels );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Team Tags', 'taxonomy general name', 'fnfnetwork' ),
		'singular_name'              => _x( 'Team Tag', 'taxonomy singular name', 'fnfnetwork' ),
		'search_items'               => __( 'Search Team Tags', 'fnfnetwork' ),
		'popular_items'              => __( 'Popular Team Tags', 'fnfnetwork' ),
		'all_items'                  => __( 'All Team Tags', 'fnfnetwork' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Team Tag', 'fnfnetwork' ),
		'update_item'                => __( 'Update Team Tag', 'fnfnetwork' ),
		'add_new_item'               => __( 'Add New Team Tag', 'fnfnetwork' ),
		'new_item_name'              => __( 'New Team Tag Name', 'fnfnetwork' ),
		'separate_items_with_commas' => __( 'Separate Team Tags with commas', 'fnfnetwork' ),
		'add_or_remove_items'        => __( 'Add or remove Team Tags', 'fnfnetwork' ),
		'choose_from_most_used'      => __( 'Choose from the most used Team Tags', 'fnfnetwork' ),
		'not_found'                  => __( 'No Team Tags found.', 'fnfnetwork' ),
		'menu_name'                  => __( 'Team Tags', 'fnfnetwork' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'Team Tag' ),
	);

	register_taxonomy( 'Team Tag', 'team', $args );
}
// hook into the init action and call create_team_taxonomies when it fires
add_action( 'init', 'fnf_team_cat', 0 );





// Meta Box Class: TeamMetaBox
// Get the field value: $metavalue = get_post_meta( $post_id, $field_id, true );
class TeamMetaBox{

	private $screen = array(
		'team',
                        
	);

	private $meta_fields = array(
                array(
                    'label' => 'Designation',
                    'id' => 'team_designation',
                    'type' => 'text',
                ),
    
                array(
                    'label' => 'Fceteam',
                    'id' => 'team_faceteam',
                    'type' => 'url',
				),
				array(
                    'label' => 'Twitter',
                    'id' => 'team_twitter',
                    'type' => 'url',
                ),
				array(
					'label' => 'Instagram',
					'id' => 'team_instagram',
					'type' => 'url',
				),
				array(
					'label' => 'LinkedIn',
					'id' => 'team_linkedin',
					'type' => 'url',
				),
				array(
					'label' => 'Youtube',
					'id' => 'team_youtube',
					'type' => 'url',
				),
				array(
					'label' => 'WhatsApp',
					'id' => 'team_whatsApp',
					'type' => 'url',
				),
				array(
					'label' => 'Reddit',
					'id' => 'team_reddit',
					'type' => 'url',
				),
				array(
					'label' => 'Pinterest',
					'id' => 'team_pinterest',
					'type' => 'url',
				),

	);

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}

	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'Team',
				__( 'Team', 'fnfnetwork' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'advanced',
				'default'
			);
		}
	}

	public function meta_box_callback( $post ) {
		wp_nonce_field( 'Team_data', 'Team_nonce' );
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
		if ( ! isset( $_POST['Team_nonce'] ) )
			return $post_id;
		$nonce = $_POST['Team_nonce'];
		if ( !wp_verify_nonce( $nonce, 'Team_data' ) )
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

if (class_exists('TeamMetabox')) {
	new TeamMetabox;
};