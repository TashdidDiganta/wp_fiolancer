<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

      <?php wp_body_open() ?>
    

    <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler">
                                <i class="flaticon-dots-menu"></i>
                            </div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="<?php home_url() ?>"><img src="<?php echo wp_get_attachment_image_url(get_theme_mod('custom_logo')); ?>" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">

                                        <?php wp_nav_menu(array(
                                                'theme_location'  => 'main-menu',
                                                'menu_class'      => 'navigation'
                                        )) ?>
                                    </div>
                                    <div class="header-action">
                                        <ul class="list-wrap">
                                            <li class="header-btn"><a href="login-signup.html" class="btn white-btn">be an freelancer</a></li>
                                            <li class="header-user"><a href="login-signup.html"><i class="flaticon-user"></i></a></li>
                                            <li class="side-toggle"><a href="#" class="navSidebar-button"><i class="flaticon-dots-menu"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="far fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo" title="Fiolancer"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

             <!-- offCanvas-start -->
            <div class="offCanvas-wrap">
                <div class="offCanvas-toggle"><i class="fal fa-times"></i></div>
                <div class="offCanvas-body">
                    <div class="offCanvas-logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                    </div>
                    <div class="offCanvas-content">
                        <h3 class="title">Digital safety starts here for both commercial and personal business.</h3>
                        <p>Website traffic, build awareness generate a higher quality leads with LinkedIn® ad. Max
                        imize B2B growth.</p>
                        <ul class="offCanvas-social list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="offCanvas-contact">
                        <h4 class="number">+1 488 246 5357</h4>
                        <h4 class="email">support@gmail.com</h4>
                        <p>3828 Delmas Terrace, Culver City, <br> CA, United States</p>
                    </div>
                </div>
            </div>
            <div class="offCanvas-overlay"></div>
            <!-- offCanvas-end -->

        </header>
    <!-- header-area-end -->
</body>
</html>