<div class="blog-single-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
           
                <section class="sidebar">
                    <div class="widget search">
                        <h5 class="widget-title">Search</h5>

                        <form role="search" method="get" class=" search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            
                            <input class="form-control" type="text" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'fnfnetwork' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
                            <button type="submit"><?php echo '<i class="far fa-search"></i>'; ?></button>
                        </form>
                    </div>
                    <?PHP dynamic_sidebar( 'sidebar-post' );?>
                    
                

                </section>
                <section class="sidebar">

                <aside class="sidebar">

<div class="widget search">
    <h5 class="widget-title">Search</h5>
    <form class="search-form">
        <input type="text" class="form-control" placeholder="Search Here...">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>
</div>

<div class="widget category">
    <h5 class="widget-title">Category</h5>
    <div class="category-list">
        <a href="#"><i class="far fa-long-arrow-right"></i>Broadband<span>(10)</span></a>
        <a href="#"><i class="far fa-long-arrow-right"></i>TV And
            Streaming<span>(15)</span></a>
        <a href="#"><i class="far fa-long-arrow-right"></i>Satellite TV<span>(20)</span></a>
        <a href="#"><i class="far fa-long-arrow-right"></i>Home Phone<span>(25)</span></a>
        <a href="#"><i class="far fa-long-arrow-right"></i>Streaming
            Service<span>(30)</span></a>
    </div>
</div>

<div class="widget recent-post">
    <h5 class="widget-title">Recent Post</h5>
    <div class="recent-post-single">
        <div class="recent-post-img">
            <img src="assets/img/blog/bs-1.jpg" alt="thumb">
        </div>
        <div class="recent-post-bio">
            <h6><a href="#">It is a long established fact that a reader layout</a></h6>
            <span><i class="far fa-clock"></i>11 June, 2022</span>
        </div>
    </div>
    <div class="recent-post-single">
        <div class="recent-post-img">
            <img src="assets/img/blog/bs-2.jpg" alt="thumb">
        </div>
        <div class="recent-post-bio">
            <h6><a href="#">It is a long established fact that a reader layout</a></h6>
            <span><i class="far fa-clock"></i>11 June, 2022</span>
        </div>
    </div>
    <div class="recent-post-single">
        <div class="recent-post-img">
            <img src="assets/img/blog/bs-3.jpg" alt="thumb">
        </div>
        <div class="recent-post-bio">
            <h6><a href="#">It is a long established fact that a reader layout</a></h6>
            <span><i class="far fa-clock"></i>11 June, 2022</span>
        </div>
    </div>
</div>

<div class="widget social-share">
    <h5 class="widget-title">Follow Us</h5>
    <div class="social-share-link">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</div>

<div class="widget sidebar-tag">
    <h5 class="widget-title">Popular Tags</h5>
    <div class="tag-list">
        <a href="#">Internet</a>
        <a href="#">Cable TV</a>
        <a href="#">Stream</a>
        <a href="#">Broadband</a>
        <a href="#">Business</a>
        <a href="#">Live</a>
        <a href="#">Corporate</a>
        <a href="#">Creative</a>
    </div>
</div>
</aside>
                </section>
            </div>
            <div class="col-lg-8">
                <div class="blog-single-wrapper">
                    <div class="blog-single-content">
                        <div class="blog-thumb-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="thumb">
                        </div>
                        <div class="blog-info">
                            <div class="blog-meta">
                                <div class="blog-meta-left">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">
                                                <?php the_author();?>
                                            </a></li>
                                        <li><i class="far fa-comments"></i>3.2k Comments</li>
                                        <li><i class="far fa-thumbs-up"></i>1.4k Like</li>
                                    </ul>
                                </div>
                                <div class="blog-meta-right">
                                    <a href="#" class="share-btn"><i class="far fa-share-alt"></i>Share</a>
                                </div>
                            </div>
                            <div class="blog-details">
                                <h3 class="blog-details-title mb-20">
                                    <?php the_title();?>
                                </h3>
                                <?php the_content();?>



                                <hr>
                                <div class="blog-details-tags pb-20">
                                    <h5>Tags : </h5>
                                    <ul>
                                        <li><a href="#">Internet</a>
                                        </li>
                                        <li><a href="#">Cable
                                                Tv</a></li>
                                        <li><a href="#">Broadband</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php comment_form( );?>
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="./Cablehub - Internet, Cable TV And Broadband Provider HTML5 Template_files/author.jpg"
                                        alt="">
                                </div>
                                <div class="author-info">
                                    <h6>Author</h6>
                                    <h3 class="author-name">
                                        <?php the_author();?>
                                    </h3>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout that it has a more
                                        less.</p>
                                    <div class="author-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments">
                            <h3>Comments (20)</h3>
                            <div class="blog-comments-wrapper">
                                <div class="blog-comments-single">
                                    <img src="./Cablehub - Internet, Cable TV And Broadband Provider HTML5 Template_files/com-1.jpg"
                                        alt="thumb">
                                    <div class="blog-comments-content">
                                        <h5>Jesse Sinkler</h5>
                                        <span><i class="far fa-clock"></i> 11 June, 2022</span>
                                        <p>There are many variations of passages the majority have suffered in
                                            some injected humour or randomised words which dont look even
                                            slightly believable.</p>
                                        <a href="#"><i class="far fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                                <div class="blog-comments-single blog-comments-reply">
                                    <img src="./Cablehub - Internet, Cable TV And Broadband Provider HTML5 Template_files/com-2.jpg"
                                        alt="thumb">
                                    <div class="blog-comments-content">
                                        <h5>Daniel Wellman</h5>
                                        <span><i class="far fa-clock"></i> 11 June, 2022</span>
                                        <p>There are many variations of passages the majority have suffered in
                                            some injected humour or randomised words which dont look even
                                            slightly believable.</p>
                                        <a href="#"><i class="far fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                                <div class="blog-comments-single">
                                    <img src="./Cablehub - Internet, Cable TV And Broadband Provider HTML5 Template_files/com-3.jpg"
                                        alt="thumb">
                                    <div class="blog-comments-content">
                                        <h5>Kenneth Evans</h5>
                                        <span><i class="far fa-clock"></i> 11 June, 2022</span>
                                        <p>There are many variations of passages the majority have suffered in
                                            some injected humour or randomised words which dont look even
                                            slightly believable.</p>
                                        <a href="#"><i class="far fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-comments-form">
                                <h3>Leave A Comment</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5"
                                                    placeholder="Your Comment*"></textarea>
                                            </div>
                                            <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i>
                                                Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</main>