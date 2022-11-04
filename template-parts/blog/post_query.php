<div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
           
                <div class="row">



                        <?php $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3',
                        );
                        $_posts = new WP_Query($args);
                        ?>
                        <?php if ($_posts->have_posts()):?>

                            <?php while ( $_posts->have_posts() ) : $_posts->the_post();?>
                        
                                <div class="col-md-6 col-lg-4">
                                    <div class="blog-item">
                                        <div class="blog-item-img">
                                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Thumb">
                                        </div>
                        

                                        <div class="blog-item-info">
                                            <div class="blog-item-meta">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-user-circle"></i><?php the_author();?></a></li>
                                                    <li><a href="#"><i class="far fa-calendar-alt"></i> <?php echo get_the_date();?></a></li>
                                                </ul>
                                            </div>
                                            <h4 class="blog-title">
                                                <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
                                            </h4>
                                            <p>
                                                <?php echo wp_trim_words(get_the_content(),20,' '); ?>
                                            </p>
                                    
                                            <a class="blog-btn" href="<?php echo get_permalink();?>">Read More<i class="far fa-long-arrow-right"></i></a>
                                        
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;

                                endif;
                                ?>
                </div>
            </div>
</div>