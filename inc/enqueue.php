<?php
/**
 * Enqueue theme assets.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load CSS and JavaScript.
 *
 * @return void
 */
function chy_company_theme_enqueue_assets() {

	wp_enqueue_style(
		'chy-company-theme-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array(),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_style(
		'chy-company-theme-layout',
		get_template_directory_uri() . '/assets/css/layout.css',
		array( 'chy-company-theme-base' ),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_style(
		'chy-company-theme-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'chy-company-theme-layout' ),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_style(
		'chy-company-theme-utilities',
		get_template_directory_uri() . '/assets/css/utilities.css',
		array( 'chy-company-theme-components' ),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_style(
		'chy-company-theme-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'chy-company-theme-utilities' ),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_style(
		'chy-company-theme-style',
		get_stylesheet_uri(),
		array( 'chy-company-theme-responsive' ),
		CHY_COMPANY_THEME_VERSION
	);

	wp_enqueue_script(
		'chy-company-theme-script',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		CHY_COMPANY_THEME_VERSION,
		true
	);
}

add_action(
	'wp_enqueue_scripts',
	'chy_company_theme_enqueue_assets'
);
