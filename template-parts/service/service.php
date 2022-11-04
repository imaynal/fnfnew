<div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Services</span>
                            <h2 class="site-title">What We Offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php 
                        query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

                        if(have_posts()) :
                        while(have_posts()) : the_post(); 
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                 
                                   <?php  the_post_thumbnail();?>
                                    
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title">
                                        <a href="#"> <?php the_title(); ?></a>
                                    </h3>
                                    <p class="service-text">
                                    <?php echo wp_trim_words(get_the_content(),20,' '); ?>
                                        
                                    </p>
                                    <div class="service-arrow">
                                        <a href="<?php echo get_permalink();?>" class="service-btn"><?php //the_excerpt(  );   ?> Read More <i
                                                class="far fa-long-arrow-right"></i></a>
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
        </div>