<?php
/**
 * Theme header template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
	<div class="site-branding">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
			</p>
		<?php endif; ?>

		<?php $site_description = get_bloginfo( 'description', 'display' ); ?>

		<?php if ( $site_description ) : ?>
			<p class="site-description">
				<?php echo esc_html( $site_description ); ?>
			</p>
		<?php endif; ?>
	</div>

	<nav class="primary-navigation" aria-label="<?php echo esc_attr_x( 'Primary menu', 'navigation landmark label', 'chy-company-theme' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
				'menu_id'        => 'primary-menu',
				'fallback_cb'    => 'wp_page_menu',
			)
		);
		?>
	</nav>
</header>
