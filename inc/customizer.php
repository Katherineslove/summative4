<?php
function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section( '2019headerImage' , array(
        'title'      => __( 'Header Image', '2019stJohn' ),
        'priority'   => 35,
    ) );
    $wp_customize->add_setting( '2019headerImageDisplay' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_headerImageDisplay',array(
        'label'      => __( 'Header Image', '2019stJohn' ),
        'section'    => '2019headerImage',
        'settings'   => '2019headerImageDisplay',
        'context'    => '2019_headerImageDisplay'
    )));

    //-----------------LOGO SECTIONS------------------
    $wp_customize->add_setting( '2019logoImageDisplay' , array(
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_logoImageDisplay',array(
        'label'      => __('Logo Image', '2019stJohn' ),
        'section'    => '2019headerImage',
        'settings'   => '2019logoImageDisplay',
        'context'    => '2019_logoImageDisplay'
    )));

    //---------------SERVICES SECTION------------------
    $wp_customize->add_section( '2019servicesBackground' , array(
        'title'      => __( 'Services Section Menu', '2019stJohn' ),
        'priority'   => 35,
    ) );
    $wp_customize->add_setting( '2019servicesBackgroundDisplay' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_servicesBackgroundDisplay',array(
        'label'      => __('Services Background Image', '2019stJohn' ),
        'section'    => '2019servicesBackground',
        'settings'   => '2019servicesBackgroundDisplay',
        'context'    => '2019_servicesBackgroundDisplay'
    )));

    //-----------------ABOUT PAGE IMAGE------------------
    $wp_customize->add_setting( '2019aboutImageDisplay' , array(
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_aboutImageDisplay',array(
        'label'      => __('About Page Image', '2019stJohn' ),
        'section'    => '2019headerImage',
        'settings'   => '2019aboutImageDisplay',
        'context'    => '2019_aboutImageDisplay'
    )));

    //-----------------CONTACT PAGE IMAGE------------------
    $wp_customize->add_setting( '2019contactImageDisplay' , array(
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_contactImageDisplay',array(
        'label'      => __('Contact Page Image', '2019stJohn' ),
        'section'    => '2019headerImage',
        'settings'   => '2019contactImageDisplay',
        'context'    => '2019_contactImageDisplay'
    )));
}
add_action('customize_register', 'mytheme_customize_register');
function mytheme_customize_css()
{
    ?>
    <style type="text/css">
    .headerImage {
        background-image: url(<?php echo get_theme_mod('2019headerImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }

    .servicesSection {
        background-image: url(<?php echo get_theme_mod('2019servicesBackgroundDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .aboutImage {
        background-image: url(<?php echo get_theme_mod('2019aboutImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }

    .contactImage {
        background-image: url(<?php echo get_theme_mod('2019contactImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');
?>
