<?php 
// Template Name: Contact
get_header();
?>

<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title"> <?php the_title();?></h2>
        <ul class="breadcrumb-menu">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li class="active"><?php the_title();?></li>
        </ul>
    </div>
</div>


<div class="contact-area py-120">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Address</h5>
                                <p>Moureen Super Market(3rd Floor), Bhuapur Bazarz Bhuapur, Tamgail.</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p>+8801770085653</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                <p><a href="">imaynalbd@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Open</h5>
                                <p>9:30AM - 10PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Get In Touch</h2>
                        </div>
                        <form method="post" action="/cablehub/assets/php/contact.php" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="Your Subject" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control"
                                    placeholder="Write Your Message"></textarea>
                            </div>
                            <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i> Send
                                Message</button>
                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10000.9779093888347!2d89.87267540466891!3d24.46304522941295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb2e6e37b650e482!2sFnF%20Network!5e0!3m2!1sen!2sbd!4v1663274282421!5m2!1sen!2sbd"
     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 
</div>
</main>

<?php get_footer(); ?>