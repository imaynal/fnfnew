<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js";>

<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   

   
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>
    
   <!-- <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->


    <header class="header">

        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="#"><i class="far fa-map-marker-alt"></i>Mourin Super Market</a>
                                </li>
                                <li><a href="mailto:imayanalbd@gmail.com"><i
                                            class="far fa-envelope"></i><span>imaynalbd@gmail.com</span></a></li>
                                <li><a href="tel:+8801770085653"><i class="far fa-phone"></i>+8801770085653</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo get_site_url();?>">
                        <img src="<?php echo get_theme_mod('fnf_logo');?>" alt="logo">
                    </a>
                     <div class="mobile-menu-right">
                        <div class="mobile-menu-list">
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <?php 
                    wp_nav_menu(array(
                        // 'theme_location'=> 'main_menu',
                        // 'container' => 'div',
                        // 'container_class' => 'navbar-collapse collapse',
                        // 'container_id' => "main_nav",
                        // 'menu_class' => 'navbar-nav',
                        // 'li_class' =>'nav-item ',
                        // 'a_class' =>'nav-link '
                        'theme_location'  => 'primary-menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'main_nav',
                        'menu_class'      => 'navbar-nav ',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        
                        
                        
                    ));
                    
                    ?>
                   
                   
                </div>
            </nav>
        </div>
    </header>


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required="">
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <main class="main">
    
