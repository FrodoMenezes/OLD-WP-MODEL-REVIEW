<?php

function simple_blog_frodo_scripts(){
    // Theme's main stylesheet
    wp_enqueue_style( 'simple_blog_frodo_scripts', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'simple_blog_frodo_scripts' );