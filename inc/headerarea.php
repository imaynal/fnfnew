<?php
//=======================
// Theme Function Header area
//========================
function fnf_setup($wp_customize){
    $wp_customize ->add_section('fnf-heder',array(
        'title'=>__('Header Area', 'fnfnetwork'),
        'description'=>'You can interseted to update your Header area, You Can do it Hear',

    ));
    $wp_customize ->add_setting('fnf_logo', array(
        'default'=> get_bloginfo('template_directory'). '/assets/img/logo/logo_fnf.png',

    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fnf_logo',array(
        'label'=> 'Logo Upload',
        'description'=>'You Can Update Your Logo here.',
        'setting'=> 'fnf_logo',
        'section'=> 'fnf-heder',
        
    )));
    $wp_customize ->add_section('top-header',array(
        'title'=>__('Top Header Area', 'fnfnetwork'),
        'description'=>'You can Change and update your top Header area, You Can do it Hear',

    ));
    $wp_customize ->add_setting('fnf_top', array(
        // 'default'=> get_bloginfo('template_directory'). '/assets/img/logo/logo_fnf.png',

    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fnf_top',array(
        'label'=> 'Logo Upload',
        'description'=>'You Can Update Your Logo here.',
        'setting'=> 'fnf_top',
        'section'=> 'top-header',
        
    )));


}
add_action('customize_register','fnf_setup');
?>