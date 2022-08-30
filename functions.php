<?php // phpcs:ignoreFile
/**
 * Theme Functions
 *
 * Try to keep this file as clean as possible
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

/**
 * Theme Support functions
 *
 * Used to enable specific features of WordPress and other tools.
 */
function lf_theme_support_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

	register_nav_menus(
		array(
			'about_01'          => esc_html__( 'Company 1' ),
			'about_02'          => esc_html__( 'Company 2' ),
			'about_03'          => esc_html__( 'Company 3' ),
			'solution_01'       => esc_html__( 'Solution 1' ),
			'solution_02'       => esc_html__( 'Solution 2' ),
			'solution_03'       => esc_html__( 'Solution 3' ),
			'resources_01' => esc_html__( 'Resources 1' ),
			'resources_02' => esc_html__( 'Resources 2' ),
			'resources_03' => esc_html__( 'Resources 3' ),
			'community_01'      => esc_html__( 'Community 1' ),
			'community_02'      => esc_html__( 'Community 2' ),
			'community_03'      => esc_html__( 'Community 3' ),
			'blog_01'           => esc_html__( 'Blog 1' ),
			'blog_02'           => esc_html__( 'Blog 2' ),
			'blog_03'           => esc_html__( 'Blog 3' ),
			'footer_01'         => esc_html__( 'Footer 1' ),
			'footer_02'         => esc_html__( 'Footer 2' ),
			'footer_03'         => esc_html__( 'Footer 3' ),
			'footer_04'         => esc_html__( 'Footer 4' ),
			'footer_05'         => esc_html__( 'Footer 5' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// include custom image sizes.
	require_once 'includes/image-sizes.php';

	// include gutenberg setup.
	require_once 'includes/gutenberg-setup.php';

}
add_action( 'after_setup_theme', 'lf_theme_support_setup' );

/**
 * Includes (enable as appropriate)
 */
require 'classes/class-lf-enqueue.php';
$enqueue = new LF_Enqueue();

// development.
if ( WP_DEBUG === true ) {
	require_once 'includes/development.php';
}

// LF utils.
require_once 'classes/class-lf-utils.php';

// WP REST API cache control.
require_once 'includes/rest-api-cache-control.php';

// Gutenberg options.
require_once 'includes/gutenberg-options.php';

// Post excerpts.
require_once 'includes/excerpts.php';

// Navigation Tools.
require_once 'includes/navigation-tools.php';

// Shortcodes
require_once 'includes/shortcodes/home.php';
require_once 'includes/shortcodes/latest-news.php';
require_once 'includes/shortcodes/next-event.php';
require_once 'includes/shortcodes/upcoming-webinars.php';
require_once 'includes/shortcodes/youtube-playlist.php';

/**
 * Make all JS defer onload apart from files specified.
 *
 * Use strpos to exclude specific files.
 *
 * @param string $url the URL.
 */
function lf_defer_parsing_of_js( $url ) {
	// Stop if admin.
	if ( is_admin() ) {
		return $url;
	}
	// Stop if not JS.
	if ( false === strpos( $url, '.js' ) ) {
		return $url;
	}
	// List of scripts that should not be deferred.
	$do_not_defer_scripts = array( 'jquery' );
	if ( ! is_front_page() && count($do_not_defer_scripts) > 0 ) {
 	foreach( $do_not_defer_scripts as $script ){
		if ( strpos( $url, $script ) ) {
			return $url;
		}
	}
}
	return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'lf_defer_parsing_of_js', 10, 3 );

/**
 * Remove English words from Chinese case studies filters
 *
 * @param array $input_object Input Object.
 * @param int   $sfid ID of form.
 */
function lf_filter_english( $input_object, $sfid ) {

	// if not the Chinese Case studies filters, then skip.
	if ( 8158 !== $sfid ) {
		return $input_object;
	}

	foreach ( $input_object['options'] as $option ) {
		$option->label = preg_replace( '/(.+)(\(\D+\))(.+)/', '$1$3', $option->label );
	}

	return $input_object;
}
add_filter( 'sf_input_object_pre', 'lf_filter_english', 10, 2 );

/**
 * Replace WordPress version appended to styles with filemtime.
 *
 * @param array $styles Styles.
 * @return void
 */
function lf_update_styles_with_filemtime( $styles ) {
	$styles->default_version = filemtime( get_template_directory() . '/style.css' );
}
add_action( 'wp_default_styles', 'lf_update_styles_with_filemtime' );