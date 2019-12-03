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
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');
?>
