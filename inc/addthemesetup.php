<?php
function fnf_setups(){
    add_theme_support('title-tag');
    /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
    /*
		 * Enable support for Post Thumbnails on posts and pages.

		 */
		add_theme_support( 'post-thumbnails', array('page','post'));
    	// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				
			)
		);
		add_theme_support('widgets');
		add_theme_support('widgets-block-editor');

  
  };
  add_action('after_setup_theme','fnf_setups');
  ?>