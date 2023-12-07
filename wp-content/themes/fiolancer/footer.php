

    <!-- Footer-start -->
        <footer class="footer-area footer-style-three">
            <div class="footer-main-wrap footer-padding">
                <div class="container">
                    <div class="footer-main-border">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget column-1">
                                    <h4 class="fw-title">About Us</h4>
                                    <div class="footer-desc">
                                        <p> <?php dynamic_sidebar('footer-col-1') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="footer-widget column-2">
                                <?php dynamic_sidebar('footer-col-2') ?>
                                    <!-- <h4 class="fw-title">Get In Touch</h4>
                                    <div class="footer-contact">
                                        <p>27 Division St, New York, <br> NY 10002, USA</p>
                                        <p>Mon – Fri: 7.00 – 22.00 <br> St – Sun: 9.00 – 20.00</p>
                                        <p>+1 800 123 456 789 <br> +1 800 987 654 321</p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="footer-widget column-3">
                                <?php dynamic_sidebar('footer-col-3') ?>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget column-4">
                                <?php dynamic_sidebar('footer-col-4') ?>
                                    <h4 class="fw-title">Get Newsletter</h4>
                                    <div class="footer-newsletter">
                                        <p>Sign up today for hints, tips & the latest product news</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email address">
                                            <button type="submit"><i class="fas fa-envelope-open"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-xl-block">
                            <div class="copyright-menu-list">
                            <?php dynamic_sidebar('footer-col-5') ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="copyright-text text-center text-md-start text-xl-center">
                                <p><?php echo get_theme_mod('fiolancer_cridets','') ?></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="copyright-social-list">
                                 <?php 
                                    $social_links = get_theme_mod('fiola_footer_social','');
                                    if(!empty($social_links)) :
                                   ?>
                                <ul class="list-wrap">
                                   <?php foreach($social_links as $social) : ?>
                                    <li>
                                        <a href="<?php echo $social['link_url']; ?>"><?php echo $social['link_target']; ?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_footer() ?>

        </footer>
        <!-- Footer-end -->
    </body>
</html>