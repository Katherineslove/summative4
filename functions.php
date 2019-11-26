<?php

function addCustomThemeStyles(){

    wp_enqueue_style("bootstrapCSS2019", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "4.3.1", "all");
    wp_enqueue_style('customCSS', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.1', 'all');

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrapJS2019", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array("jquery"), "4.3.1", true);
    wp_enqueue_script("customJS2019", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), "0.0.1", true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

function addCustomMenus_2019(){
    add_theme_support('menus');
    register_nav_menu('top_navigation', __('The top navigation is located at the top of each page.', '2019stJohn'));
    register_nav_menu('bottom_navigation', __('The bottom navigation is located at the bottom of each page.', '2019stJohn'));
    register_nav_menu('side_navigation', __('The side navigation is located on the left of each page.', '2019stJohn'));
}

add_action('after_setup_theme', 'addCustomMenus_2019');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_default_headers(array(
    'defaultImage' => array(
        'url'           => get_template_directory_uri() . '/assets/images/stjohns_1109.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/stjohns_1109.jpg',
        'description'   => __('The default image for the custom header.', '2019stJohn')
    )
));

$customHeaderDefaults = array(
    'default-image' => get_template_directory_uri() . '/assets/images/stjohns_1109.jpg'
);
add_theme_support('custom-header', $customHeaderDefaults);


require_once get_template_directory() . '/inc/customizer.php';


// 2019stJohn