<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() .'/style.css' );
  
}

function add_admin_link($items, $args) {
  if (is_user_logged_in() && ($args->theme_location=='main-menu')){
      $items .= '<li id="admin_link"><a href="'. get_admin_url() .'">Admin</a></li>';
  }
  return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

function blankslate_child_responsive_menu() {
  register_nav_menu( 'primary-res-navigation', __( 'Responsive', 'blankSlate_child' ) );
};
add_action( 'after_setup_theme', 'blankslate_child_responsive_menu' );