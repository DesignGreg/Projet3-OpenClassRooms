<?php

require_once('bs4navwalker.php');

function moviefestival_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/dependencies/bootstrap/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/dependencies/@fortawesome/fontawesome-free/css/all.css' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/dependencies/animate.css/animate.min.css' );
  wp_enqueue_style( 'core', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'moviefestival_enqueue_styles');

function moviefestival_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dependencies/bootstrap/dist/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'moviefestival_enqueue_scripts');



if ( function_exists ('register_sidebar')) { 
    register_sidebar ('right'); 
} ?>