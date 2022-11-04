<?php

function post_sidebar(){
   register_sidebar( array(
    'name' => __( 'Post Sidebar', 'fnfnetwork' ),
    'id' => 'sidebar-post',
    'description' => __( 'Blog Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => ' <div class="widget search ">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
    ) );	
	
}
add_action('widgets_init','post_sidebar');







