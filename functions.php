<?php

add_theme_support('custom-logo');


function my_theme_enqueue_styles()
{
  wp_enqueue_style('my_theme_style', get_stylesheet_uri());
}

//1. function creation mu_theme_enqueue_styles
// 2. call wp_enqueue_style
// 3. named our stylesheet
// 4. get_stylesheet_uri() which returns the stylesheet address
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

//1.add_action hook
// 2. when wp_enqueue_script are started
// 3. call our function


function register_my_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'mytheme'));
}

add_action('after_setup_theme', 'register_my_menu');



/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'my_widgets_init' );



$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'   => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

require get_template_directory() .'/customizer.php';

require get_template_directory() .'/MyCustomPost.php';



?>


