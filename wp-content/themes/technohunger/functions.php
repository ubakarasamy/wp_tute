<?php

function techno_script_enqueue() {
//adding stylesheet
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customstyle2', get_template_directory_uri() . '/css/navbar.css', array(), '1.0.0', 'all');
	
//adding java scripts
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customjs2', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1', true);
	
}
//adding actions
//for adding scripts and css
add_action('wp_enqueue_scripts', 'techno_script_enqueue');

//for adding menus
function techno_theme_setup() {
	add_theme_support('menus');
	//we can also add another menu for footer or other purpose just by registering menu with another name as primary menu
	register_nav_menu('primary', 'primary header navigation');
}
add_action('init', 'techno_theme_setup');



