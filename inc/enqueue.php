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
		'chy-company-theme-style',
		get_template_directory_uri() . '/assets/css/theme.css',
		array(),
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
