<?php

/**
 * Inkfactory functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inkfactory
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('inkfactory_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inkfactory_setup()
	{

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'Inkfactory'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'inkfactory_setup');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
	register_nav_menu('header_menu', 'Header menu');
	register_nav_menu('hero-menu', 'Hero menu');
	register_nav_menu('footer_row_1', 'Footer column 1');
	register_nav_menu('footer_row_2', 'Footer column 2');
	register_nav_menu('footer_row_3', 'Footer column 3');
}

/**
 * Enqueue scripts and styles.
 */
function inkfactory_scripts()
{

	// jquery
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery.min.js', array(), null, true);
	wp_enqueue_script('jquery.mask', get_template_directory_uri() . '/assets/libs/jquery-mask/jquery.mask.min.js', array('jquery'), _S_VERSION, true);

	//magnific-popup
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/libs/magnific-popup/magnific-popup.css', array(), _S_VERSION);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true);

	// Swiper
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper.min.js', array('jquery'), _S_VERSION);

	wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/libs/bootstrap-grid/bootstrap-grid.min.css', array(), _S_VERSION);
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), time());
	wp_enqueue_style('inkfactory-style', get_stylesheet_uri(), array(), _S_VERSION);

	// Wow
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate/animate.min.css', array(), _S_VERSION);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery'), _S_VERSION, true);

	// Scripts
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time());
}
add_action('wp_enqueue_scripts', 'inkfactory_scripts');


/* Disable the Admin Bar. */
// add_filter('show_admin_bar', '__return_false');
