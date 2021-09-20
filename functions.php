<?php

// Hämtar all css, boostrap samt font-awesome
function load_stylesheets() {
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('styles');
    
}
 
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Hämtar menyer
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  function wpb_sidebar_new_menu() {
    register_nav_menu('my-sidebar-menu',__( 'My Sidebar Menu' ));
  }
  add_action( 'init', 'wpb_sidebar_new_menu' );

  function wpb_sidebar_pages() {
    register_nav_menu('my-sidebar-pages',__( 'My Sidebar Menu For Pages' ));
  }
  add_action( 'init', 'wpb_sidebar_pages' );

// Hämtar sidebar meny 
  register_sidebar(
    array(
        'name' => 'sidebar',
        'id' => 'sidebar-wid',
        'class' => 'sidebar',
        'before_title' => '<li>',
        'after_title' => '</li>',
    )
);
//Möjlighet för att lägga in bilder
add_theme_support( 'post-thumbnails' );

//hämtar jQuery samt JS
function load_js() {
    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('script');
    wp_enqueue_script('jquery');

 }
 add_action('wp_enqueue_scripts', 'load_js');


?>