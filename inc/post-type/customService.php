<?php
function fnf_service(){
    register_post_type('service',
    array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => (' view Service'),
            'not_found' => ('sorry, we cold not found'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => false,
        'public_quearable' => false,
        'exclude_from_search' => true,
        'menu_position' => 7,
        'has_archive' => false,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'Service'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'fnf_service');