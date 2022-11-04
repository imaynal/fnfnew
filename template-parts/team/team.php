<div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="site-heading text-center">
                            
                            <h2 class="site-title">Meet Our Experts</h2>
                        </div>
                    </div>
                </div>
              
                <div class="row">



<?php $args = array(
    'post_type' => 'team',
    'posts_per_page' => '2',
    
    
    
);
$_posts = new WP_Query($args);
?>
<?php if ($_posts->have_posts()):?>

    <?php while ( $_posts->have_posts() ) : $_posts->the_post();?>

    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                                    <?php  the_post_thumbnail();?>
                                <div class="team-content">
                                    <div class="team-bio">
                                        <h5><a href="#"><?php the_title();?></a></h5>
                                        <span><?php
                                        $meta_value= get_post_meta($post->ID, 'team_designation', true);
                                        echo $meta_value;
                                        ?> </span>
                                    </div>
                                <div class="social-btn"><i class="far fa-share-alt"></i></div>
                            </div>
                            <div class="team-social">
                                    <a href="<?php
                                        $meta_value= get_post_meta($post->ID, 'team_facebook', true);
                                        echo $meta_value;
                                        ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php $meta_value= get_post_meta($post->ID, 'team_twitter', true);
                                        echo $meta_value;?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php $meta_value= get_post_meta($post->ID, 'team_instagram', true);
                                        echo $meta_value;?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="<?php $meta_value= get_post_meta($post->ID, 'team_youtube', true);
                                        echo $meta_value;?>" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                            
    <?php endwhile;

        endif;
        ?>
</div>
            </div>
</div>