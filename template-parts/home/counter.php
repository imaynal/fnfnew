<div class="counter-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                <?php 
                        query_posts('post_type=counter&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

                        if(have_posts()) :
                        while(have_posts()) : the_post(); 
                        ?>


                    <div class="col-lg-4 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                            <?php  the_post_thumbnail();?>
                            </div>
                            <div>
                                <span class="counter" data-count="+" data-to="<?php
                                    $meta_value= get_post_meta($post->ID, 'counter_lenth', true);
                                     echo $meta_value;
                                    ?>" data-speed="3000">300</span>
                                <h6 class="title">+  <?php the_title(); ?></h6>
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