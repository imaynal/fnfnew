
<?php get_header();?> 
<div class="coming-soon pt-120 pb-90" style="background: url(&#39;assets/img/coming-soon/01.jpg&#39;);">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-9 col-lg-7">
                <div class="coming-soon-content text-white text-center">
                    <h1 class="text-white">Coming Soon</h1>
                    <p class="lead">This page is under construction. We'll be here soon.</p>
                  
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-5">
                <form class="newsletter-form position-relative">
                    <input type="text" class="input-newsletter form-control" placeholder="Enter your email" name="email"
                        required="" autocomplete="off">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="coming-social">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>
<div id="timer">
  <div id="days"></div>
  <div id="hours"></div>
  <div id="minutes"></div>
  <div id="seconds"></div>
</div>




<?php get_footer();?>