<?php

function qamari_assets(){
    wp_enqueue_style('mincss', get_template_directory_uri() . '/assets/css/styles.min.css' );
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css' );

    // wp_register_script( 'minscript', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), NULL, false );
    // wp_enqueue_script( 'minscript' );
    // wp_register_script( 'common', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), NULL, false );
    // wp_enqueue_script( 'common' );
    wp_enqueue_script('minscript', get_template_directory_uri() . '/assets/js/scripts.min.js' );
    wp_enqueue_script('common', get_template_directory_uri() . '/assets/js/common.js' );
}
add_action( 'wp_enqueue_scripts', 'qamari_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('about'));

function functions4woo()
{
   // Here we load from our includes directory
   // This considers parent and child themes as well    
 locate_template( array( 'functions4woo.php' ), true, true );
}
add_action( 'after_setup_theme', 'functions4woo' );