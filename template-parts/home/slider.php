<div class="fslide-section">
            <div class="fslide-slider owl-carousel owl-theme">
                        <?php 
                            query_posts('post_type=fnfSlider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

                             if(have_posts()) :
                             while(have_posts()) : the_post(); 
                        ?>
                <div class="fslide-single" style="background-image:url('<?php the_post_thumbnail(); ?>')">
                    <div class="fslide-shape-1"></div>
                    <div class="fslide-shape-2"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-lg-7">
                                <div class="fslide-content">
                                <h6 class="fslide-sub-title wow animate__animated animate__fadeInUp"
                                                data-wow-duration="1s" data-wow-delay=".25s"><?php $meta_value= get_post_meta($post->ID, 'slider_top', true);
                                            echo $meta_value;   ?></h6>
                                            <h1 class="fslide-title wow animate__animated animate__fadeInUp"
                                                data-wow-duration="1s" data-wow-delay=".50s">
                                                <?php the_title(); ?>
                                            </h1>
                                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                                data-wow-delay=".75s">
                                                <?php $meta_value= get_post_meta($post->ID, 'slider_Bottom', true);
                                            echo $meta_value;   ?>
                                                
                                            </p>
                                    <div class="fslide-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                        data-wow-delay="1s">
                                        <a href="#" class="theme-btn"> <?php $meta_value= get_post_meta($post->ID, 'slider_button1', true);
                                            echo $meta_value;   ?><i
                                                class="far fa-long-arrow-right"></i></a>
                                        <a href="#" class="theme-border-btn"> <?php $meta_value= get_post_meta($post->ID, 'slider_button2', true);
                                            echo $meta_value;   ?><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        endwhile;
                        endif;
                        ?>
            </div>
        </div>