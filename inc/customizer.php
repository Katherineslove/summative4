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

    //-------------------GET TO KNOW US------------------

    $wp_customize->add_section( '2019_about' , array(
        'title'      => __( 'Footer Information', '2019stJohn' ),
        'priority'   => 35,
    ));
    $wp_customize->add_setting( '1902_FooterText' , array(
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, '2019_aboutText', array(
        'label'          => __( 'Get To Know Us', '2019stJohn' ),
        'section'        => '2019_about',
        'settings'       => '2019_aboutText',
        'type'           => 'text'
    )));
}
add_action('customize_register', 'mytheme_customize_register');


function mytheme_customize_css()
{
    ?>
    <style type="text/css">
        .headerImage {
            background-image: <?php echo get_theme_mod('2019headerImageDisplay', '../images/stjohns_1109.jpg');  ?>;
            opacity: 0.75;
            height: 55vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: inherit;
        }

        .aboutSection {
            background-color: red;
        }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');
?>
