<?php
/**
 * Theme bootstrap file.
 *
 * Loads the theme modules and defines shared theme constants.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'CHY_COMPANY_THEME_VERSION' ) ) {
	define( 'CHY_COMPANY_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
}

require_once get_template_directory() . '/inc/theme-support.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menus.php';
require_once get_template_directory() . '/inc/widgets.php';
