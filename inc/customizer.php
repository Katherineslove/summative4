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
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');
?>
