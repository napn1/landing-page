<?php
function mytheme_enqueue_assets() {
  wp_enqueue_style(
    'mytheme-style',
    get_template_directory_uri() . '/style.css',
    [],
    filemtime( get_template_directory() . '/style.css' ) 
  );
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('custom-testimonials', get_template_directory_uri() . '/js/testimonials.js', array('swiper-js'), null, true);
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets', 'enqueue_testimonials_scripts' );
function mytheme_setup() {
  add_theme_support( 'custom-logo' ); 
  register_nav_menus( array(
    'main-menu' => 'Главное меню',
  ));
}
add_action( 'after_setup_theme', 'mytheme_setup' );
