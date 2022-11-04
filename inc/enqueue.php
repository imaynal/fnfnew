
<?php 
// theme css and jquery file
function fnf_load_scripts(){
    wp_enqueue_style('fnf-style',get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('coustom', get_template_directory_uri().'/assets/css/coustom.css',array(),'1.0.0','all' );
    wp_enqueue_style('coustom');
    wp_register_style('fontawesome', get_template_directory_uri().'/assets/css/all-fontawesome.min.css',array(),'5.15.1','all' );
    wp_enqueue_style('fontawesome');
    wp_register_style('popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),);
    wp_enqueue_style('popup');
    wp_register_style('animate', get_template_directory_uri().'/assets/css/animate.min.css',array(),);
    wp_enqueue_style('animate');
    wp_register_style('carouselcss', get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'2.3.4');
    wp_enqueue_style('carouselcss');
    wp_register_style('jQueryUI', get_template_directory_uri().'/assets/css/jquery-ui.min.css',array(),'1.12.1');
    wp_enqueue_style('jQueryUI');
    wp_register_style('flex-slider', get_template_directory_uri().'/assets/css/flex-slider.min.css',array(),'2.0');
    wp_enqueue_style('flex-slider');

    
//jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',array(),'5.0.2','true');
    // wp_enqueue_script('countdown', get_template_directory_uri().'/assets/js/countdown.min.js',array(),'2.2.0','true');
    wp_enqueue_script('counter-up', get_template_directory_uri().'/assets/js/counter-up.js',array(),'true');
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0','true');
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js' );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js' ,array(),'4.1.4','true');
    wp_enqueue_script( 'carouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' ,'2.3.4','true');
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js' ,'1.1.2','true');
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js' ,'4.2.2','true');


};
add_action('wp_enqueue_scripts', 'fnf_load_scripts');
?>