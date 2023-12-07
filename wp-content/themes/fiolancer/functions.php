<?php

add_action('wp_enqueue_scripts', function(){

    // add all css link

    wp_enqueue_style('zen_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('zen_icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('zen_odometer', get_template_directory_uri() . '/assets/css/odometer.css');
    wp_enqueue_style('zen_jquery_ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
    wp_enqueue_style('zen_slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('zen_default', get_template_directory_uri() . '/assets/css/default.css');

    wp_enqueue_style('zen_flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('zen_swiper', get_template_directory_uri() . 'assets/css/swiper-bundle.css');
    wp_enqueue_style('zen_fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
    wp_enqueue_style('zen_magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('zen_animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('zen_main', get_template_directory_uri() . '/assets/css/style.css');


    // add all js link

    wp_enqueue_script('zen_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_odometer', get_template_directory_uri() . '/aassets/js/jquery.odometer.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_particles', get_template_directory_uri() . '/assets/js/particles.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('zen_main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);


});


  // get daynamic logo

  add_action('after_setup_theme', function(){


    add_theme_support( 'post-thumbnails' );

    register_nav_menus([
        'main-menu' => esc_html__( 'Main Menu', 'fiolancer' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'fiolancer' ),
    ]);

        /**
        * Add support for core custom logo.
        *
        * @link https://codex.wordpress.org/Theme_Logo
        */
        add_theme_support('custom-logo', array());
    });



    //add widgets

    add_action('widgets_init', function(){

        register_sidebar( array(
            'name' => 'Blog sidebar',
            'id'   => 'blog-sidebar',
            'before_title' => '<h4 class="tg-sidebar-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
        ));

        register_sidebar( array(
            'name' => 'Footer col 1',
            'id'   => 'footer-col-1',
            'before_title' => '<h4 class="fw-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
        ));

        register_sidebar( array(
            'name' => 'Footer col 2',
            'id'   => 'footer-col-2',
            'before_title' => '<h4 class="fw-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
        ));

        register_sidebar( array(
            'name' => 'Footer col 3',
            'id'   => 'footer-col-3',
            'before_title' => '<h4 class="fw-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-widget list-wrap column-3">',
            'after_widget' => '</div>',
        ));

        register_sidebar( array(
            'name' => 'Footer col 4',
            'id'   => 'footer-col-4',
            'before_title' => '<h4 class="fw-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
        ));

        register_sidebar( array(
            'name' => 'Footer col 5',
            'id'   => 'footer-col-5',
            'before_title' => '<h4 class="fw-title">',
            'after_title' => '</h4>',
            'before_widget' => '<div class="list-wrap">',
            'after_widget' => '</div>',
        ));


    });


    new \Kirki\Panel(
        'fiola_settings',
        [
            'priority'    => 10,
            'title'       => esc_html__( 'fiolancer Setting', 'kirki' ),
            'description' => esc_html__( 'My Panel Description.', 'kirki' ),
        ]
    );


    new \Kirki\Section(
        'fiola_footer',
        [
            'title'       => esc_html__( 'fiolancer footer setting', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'fiola_settings',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'fiola_footer_logo',
            'label'       => esc_html__( 'Footer Logo', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'fiola_footer',
            'default'     => '',
        ]
    );
    
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'fiolancer_description',
            'label'       => esc_html__( 'footer dscription', 'kirki' ),
            'section'     => 'fiola_footer',
            'default'     => esc_html__( 'A traditional Listing system comprises: One or more cameras (analog digital), each with a lens equipped with an image sensor.', 'kirki' ),
        ]
    );


    new \Kirki\Field\Textarea(
        [
            'settings'    => 'fiolancer_cridets',
            'label'       => esc_html__( 'End Cridets', 'kirki' ),
            'section'     => 'fiola_footer',
            'default'     => esc_html__( 'Copyright & Design By @Fiolancer  - 2022.', 'kirki' ),
        ]
    );



    new \Kirki\Field\Repeater(
        [
            'settings'     => 'fiola_footer_social',
            'label'        => esc_html__( 'footer_social_links', 'kirki' ),
            'section'      => 'fiola_footer',
            'priority'     => 10,

            'default'      => [
            ],
            'row_label'    => [
                'type'  => 'field',
                'value' => esc_html__( 'ROW', 'kirki' ),
                'field' => 'link_target',
            ],
            'fields' => [
                'link_target'   => [
                    'type'        => 'select',
                    'label'       => esc_html__( 'Choose social media', 'kirki' ),
                    'description' => esc_html__( 'Description', 'kirki' ),
                    'default'     => "<i class='fab fa-facebook-f'></i>",
                    'choices' => [
                        "<i class='fab fa-facebook-f'></i>" => "Facebook",
                        "<i class='fab fa-twitter'></i>" => "Twitter",
                        "<i class='fab fa-behance'></i>" => "Behance",
                        "<i class='fab fa-youtube'></i>" => "Youtube",
                    ],
                ],
                'link_url'    => [
                    'type'        => 'text',
                    'label'       => esc_html__( 'Link URL', 'kirki' ),
                    'description' => esc_html__( 'Description', 'kirki' ),
                    'default'     => '',
                ],
            ],
        ]
    );