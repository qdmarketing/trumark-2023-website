<?php



/**
 * Requires
 */
require_once 'resources/qntm-functions.php'; // Functions, misc things
require_once 'resources/custom-post-types.php'; // Custom Post Types
require_once 'resources/qntm-blocks.php'; // ACF Gutenberg Blocks



/**
 * Theme setup.
 */
function tailpress_setup()
{

	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
			'header-utility' => __('Header Utility Menu', 'tailpress'),
			'footer-main' => __('Footer Main Menu', 'tailpress'),
			// 'footer-utility' => __('Footer Utility Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');

	// add_action('enqueue_block_editor_assets', 'custom_gutenberg_editor_stylesheet');
	// function custom_gutenberg_editor_stylesheet()
	// {
	// 	wp_enqueue_style('custom-gutenberg-stylesheet', get_template_directory_uri() . '/css/editor-styles.css', array(), wp_get_theme()->get('Version'), 'all');
	// }


	add_editor_style('https://use.typekit.net/ffq4tbb.css');
	// add_editor_style('resources/css/fonts/fontawesome-pro-6.4.2-web/css/all.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_style('typekit', "https://use.typekit.net/ffq4tbb.css");
	// wp_enqueue_style('fontawesome', tailpress_asset('resources/css/fonts/fontawesome-pro-6.4.2-web/css/all.css'), array(), $theme->get('Version'));
	wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array('jquery'), $theme->get('Version'));
	wp_enqueue_script('slickJs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('glightbox', get_template_directory_uri() . '/js/glightbox.min.js', array('jquery'), '', true);
	wp_enqueue_script('modal', get_template_directory_uri() . '/js/jquery.modal.min.js', array('jquery'), '', true);
	// Check if the current page uses the 'page-careers' template
	if (is_page_template('page-careers.php')) {
	}
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);
