<?php
/**
 * Configure theme feature support.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @return void
 */
function chy_company_theme_setup() {
	load_theme_textdomain(
		'chy-company-theme',
		get_template_directory() . '/languages'
	);

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
			'script',
			'style',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'               => 80,
			'width'                => 240,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
		)
	);

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'editor-styles' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'chy_company_theme_setup' );
