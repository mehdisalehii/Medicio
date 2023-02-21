<?php

function register_my_menus() {
    register_nav_menus(
        array(
            'top-menu' => __( 'فهرست بالا' ),
            'main-menu' => __( 'فهرست اصلی' ),
            'footer-menu' => __( 'فهرست پایین' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}

//function mytheme_add_woocommerce_support() {
//    add_theme_support( 'woocommerce', array(
//        'thumbnail_image_width' => 150,
//        'single_image_width'    => 400,
//
//        'product_grid'          => array(
//            'default_rows'    => 3,
//            'min_rows'        => 2,
//            'max_rows'        => 8,
//            'default_columns' => 4,
//            'min_columns'     => 2,
//            'max_columns'     => 5,
//        ),
//    ) );
//}
//add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );





require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

?>