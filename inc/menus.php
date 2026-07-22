<?php
/**
 * Register theme navigation menus.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme menu locations.
 *
 * @return void
 */
function chy_company_theme_register_menus() {
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'chy-company-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'chy_company_theme_register_menus' );
