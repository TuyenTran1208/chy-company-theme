<?php
/**
 * Register theme widget areas.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme widget areas.
 *
 * @return void
 */
function chy_company_theme_register_widget_areas() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'chy-company-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to display them in the sidebar.', 'chy-company-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'chy_company_theme_register_widget_areas' );
