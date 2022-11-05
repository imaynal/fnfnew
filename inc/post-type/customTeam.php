<?php
function fnf_team(){
    register_post_type('team',
    array(
        'labels' => array(
				'name' => _x( 'teams', 'Post Type General Name', 'fnfnetwork' ),
				'singular_name' => _x( 'team', 'Post Type Singular Name', 'fnfnetwork' ),
				'menu_name' => _x( 'teams', 'Admin Menu text', 'fnfnetwork' ),
				'name_admin_bar' => _x( 'team', 'Add New on Toolbar', 'fnfnetwork' ),
				'archives' => __( 'team', 'fnfnetwork' ),
				'attributes' => __( 'team', 'fnfnetwork' ),
				'parent_item_colon' => __( 'team', 'fnfnetwork' ),
				'all_items' => __( 'All teams', 'fnfnetwork' ),
				'add_new_item' => __( 'Add New team', 'fnfnetwork' ),
				'add_new' => __( 'Add New', 'fnfnetwork' ),
				'new_item' => __( 'New team', 'fnfnetwork' ),
				'edit_item' => __( 'Edit team', 'fnfnetwork' ),
				'update_item' => __( 'Update team', 'fnfnetwork' ),
				'view_item' => __( 'View team', 'fnfnetwork' ),
				'view_items' => __( 'View teams', 'fnfnetwork' ),
				'search_items' => __( 'Search team', 'fnfnetwork' ),
				'not_found' => __( 'Not found', 'fnfnetwork' ),
				'not_found_in_trash' => __( 'Not found in Trash', 'fnfnetwork' ),
				'featured_image' => __( 'Featured Image', 'fnfnetwork' ),
				'set_featured_image' => __( 'Set featured image', 'fnfnetwork' ),
				'remove_featured_image' => __( 'Remove featured image', 'fnfnetwork' ),
				'use_featured_image' => __( 'Use as featured image', 'fnfnetwork' ),
				'insert_into_item' => __( 'Insert into team', 'fnfnetwork' ),
				'uploaded_to_this_item' => __( 'Uploaded to this team', 'fnfnetwork' ),
				'items_list' => __( 'teams list', 'fnfnetwork' ),
				'items_list_navigation' => __( 'teams list navigation', 'fnfnetwork' ),
				'filter_items_list' => __( 'Filter teams list', 'fnfnetwork' ),
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
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function fnf_create_team_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Team_Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Team_Categorie', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Categorie', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Categorie:', 'textdomain' ),
		'edit_item'         => __( 'Edit Categorie', 'textdomain' ),
		'update_item'       => __( 'Update Categorie', 'textdomain' ),
		'add_new_item'      => __( 'Add New Categorie', 'textdomain' ),
		'new_item_name'     => __( 'New Categorie Name', 'textdomain' ),
		'menu_name'         => __( 'Categorie', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'team' ), $args );

	unset( $args );
	unset( $labels );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Team_Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'team_Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tags', 'textdomain' ),
		'popular_items'              => __( 'Popular Tags', 'textdomain' ),
		'all_items'                  => __( 'All Tags', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag', 'textdomain' ),
		'update_item'                => __( 'Update Tag', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Tags', 'textdomain' ),
		'not_found'                  => __( 'No Tags found.', 'textdomain' ),
		'menu_name'                  => __( 'Tags', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'writer' ),
	);

	register_taxonomy( 'writer', 'team', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'fnf_create_team_taxonomies', 0 );




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