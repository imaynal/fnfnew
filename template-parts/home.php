<?php
//Template Name: home
get_header();
get_template_part( 'template-parts/home/slider' );
get_template_part( 'template-parts/service/service' );

?>

<div class="find-location">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="find-location-wrapper">
                    <h1>Let's find our package services available in your area</h1>
                    <div class="find-location-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Location">
                                <button type="submit">Find Now <i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_template_part('template-parts/price/price');?>



<?php get_template_part('template-parts/home/counter');?>


<?php get_template_part('template-parts/team/team');?>



<?php get_template_part('template-parts/home/testimonial');?>












<?php get_template_part('template-parts/home/partnar');?>
<?php get_template_part('template-parts/blog/post_query');?>





</main>

<?php get_footer();?>