<?php

function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section( '2019headerImage' , array(
        'title'      => __( 'Top Section Image', '2019stJohn' ),
        'priority'   => 35,
    ) );

    $wp_customize->add_setting( '2019headerImageDisplay' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_headerImageDisplay',array(
        'label'      => __('Header Image', '2019stJohn' ),
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

    //-------------------GET TO KNOW US------------------

    $wp_customize->add_section( '2019_aboutTextSection' , array(
        'title'      => __( 'Get To Know Us', '2019stJohn' ),
        'priority'   => 35,
    ));
    $wp_customize->add_setting( '2019_aboutText' , array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, '2019_aboutTextControl', array(
        'label'          => __( 'Get To Know Us', '2019stJohn' ),
        'section'        => '2019_aboutTextSection',
        'settings'       => '2019_aboutText'
    )));

    //---------------SERVICES SECTION------------------

    $wp_customize->add_section( '2019servicesBackground' , array(
        'title'      => __( 'Services Section Menu', '2019stJohn' ),
        'priority'   => 35,
    ) );

    $wp_customize->add_setting( '2019servicesBackgroundDisplay' , array(
        'default'   => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'2019_servicesBackgroundDisplay',array(
        'label'          => __( 'Services Section?', '2019stJohn' ),
        'section'    => '2019servicesBackground',
        'settings'   => '2019servicesBackgroundDisplay',
        'type'           => 'radio',
        'choices'        => array(
            'yes'   => __( 'Yes' ),
            'no'  => __( 'No' )
        )))
    );
    //---------------NEWS SECTION------------------

    $wp_customize->add_section( '2019newsSection' , array(
        'title'      => __( 'News Section', '2019stJohn' ),
        'priority'   => 35,
    ) );

    $wp_customize->add_setting( '2019newsSectionDisplay' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_newsSectionDisplay',array(
        'label'      => __('News Section', '2019stJohn' ),
        'section'    => '2019newsSection',
        'settings'   => '2019newsSectionDisplay',
        'context'    => '2019_newsSectionDisplay'
    )));
}
add_action('customize_register', 'mytheme_customize_register');


function mytheme_customize_css()
{
    ?>
    <style type="text/css">
    .headerImage {
        background-image: url("./images/stjohns_1109.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .aboutSection {
        background-color: <?php echo get_theme_mod('2019_aboutText', '#ffffff');  ?>;
    }

    .servicesSection {
        background-color: <?php echo get_theme_mod('2019servicesBackgroundDisplay', '#f6b243');  ?>;
    }

    .newsSection {
        background-color: <?php echo get_theme_mod('2019newsSectionDisplay', '#4ca746');  ?>;
    }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');
?>
