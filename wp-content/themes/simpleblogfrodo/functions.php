<?php

function simple_blog_frodo_scripts() {
    // Includes bootstrap 4.4.1
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
    // Theme's main stylesheet
    wp_enqueue_style( 'simple_blog_frodo_scripts', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'simple_blog_frodo_scripts' );

function simple_blog_frodo_config() {
	register_nav_menus(
		array(
			'simple_blog_frodo_main_menu'	=> 'Blog Frodo Main Menu',
            'simple_blog_frodo_footer_menu'	=> 'Blog Frodo Footer Menu'
		)
	);
}
add_action( 'after_setup_theme', 'simple_blog_frodo_config', 0 );