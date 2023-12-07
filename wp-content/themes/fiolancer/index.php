<?php

get_header(); ?>

        <!-- blog-area -->
        <section class="standard-blog-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) :?>

                                <?php the_post() ?>
                                <div class="tg-blog-post-item">
                                    <div class="tg-blog-post-thumb">
                                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                    </div>
                                    <div class="tg-blog-post-content">
                                        <div class="tg-blog-post-tag">
                                            <a href="blog.html"><?php echo get_the_category()[0]->name ?></a>
                                        </div>
                                        <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                        <div class="tg-blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-eye"></i>232 Views</li>
                                                <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                                <li><i class="far fa-calendar-alt"></i>2<?php the_date(); ?></li>
                                            </ul>
                                        </div>
                                        <div class="tg-post-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                        </div>
                                        <div class="tg-blog-post-bottom">
                                            <a href="<?php the_permalink() ?>" class="btn theme-btn read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    

                        <!-- side-Bar -->
                    
                        <div class="pagination-wrap">
                   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <aside class="tg-blog-sidebar">
                           <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                           
                                <!-- <div class="tg-rc-post">
                                    <div class="tg-rc-post-thumb">
                                        <a href="#"><img src="assets/img/blog/rc_post_thumb02.jpg" alt="img"></a>
                                    </div>
                                    <div class="tg-rc-post-content">
                                        <h5 class="title"><a href="blog-details.html">People think feel & behave in a way.</a></h5>
                                        <div class="tg-rc-post-date">
                                            <span><i class="far fa-calendar-alt"></i>24th March 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-rc-post">
                                    <div class="tg-rc-post-thumb">
                                        <a href="#"><img src="assets/img/blog/rc_post_thumb03.jpg" alt="img"></a>
                                    </div>
                                    <div class="tg-rc-post-content">
                                        <h5 class="title"><a href="blog-details.html">That contributes to their success.</a></h5>
                                        <div class="tg-rc-post-date">
                                            <span><i class="far fa-calendar-alt"></i>24th March 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="tg-sidebar-title">Categories</h4>
                                <div class="tg-sidebar-cat">
                                    <ul class="list-wrap">
                                        <li><a href="#">Business <span>26</span></a></li>
                                        <li><a href="#">Consultant <span>30</span></a></li>
                                        <li><a href="#">Creative <span>71</span></a></li>
                                        <li><a href="#">UI/UX <span>56</span></a></li>
                                        <li><a href="#">Technology <span>60</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="tg-sidebar-title">Never Miss News</h4>
                                <div class="tg-sidebar-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="tg-sidebar-title">Instagram Feeds</h4>
                                <div class="sidebar-insta-post">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post01.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post02.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post03.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post04.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post05.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post06.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post07.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post08.jpg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/blog/insta_post09.jpg" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="tg-sidebar-title">Popular Tags</h4>
                                <div class="tg-widget-tag">
                                    <a href="#">Popular</a>
                                    <a href="#">desgin</a>
                                    <a href="#">usability</a>
                                    <a href="#">ux</a>
                                    <a href="#">develop</a>
                                    <a href="#">icon</a>
                                    <a href="#">kit</a>
                                    <a href="blog.html">Business</a>
                                    <a href="#">consult</a>
                                    <a href="#">keyboard</a>
                                    <a href="#">mouse</a>
                                    <a href="#">tech</a>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="tg-sidebar-title">Sponsor Adds</h4>
                                <div class="tg-sidebar-poster">
                                    <a href="blog.html">
                                        <img src="assets/img/blog/sidebar_banner.jpg" alt="img">
                                    </a>
                                </div>
                            </div> -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->










<?php
get_footer();