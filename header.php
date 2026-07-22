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

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1">

	<?php if ( is_singular() && pings_open() ) : ?>
		<link
			rel="pingback"
			href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#primary">

	<?php esc_html_e( 'Skip to content', 'chy-company-theme' ); ?>

</a>

<header id="masthead" class="site-header">
<div class="container">
	<div class="site-branding">

		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		}
		?>

		<?php if ( is_front_page() && is_home() ) : ?>

			<h1 class="site-title">

				<a
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					rel="home">

					<?php bloginfo( 'name' ); ?>

				</a>

			</h1>

		<?php else : ?>

			<p class="site-title">

				<a
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
					rel="home">

					<?php bloginfo( 'name' ); ?>

				</a>

			</p>

		<?php endif; ?>

		<?php
		$site_description = get_bloginfo(
			'description',
			'display'
		);

		if ( $site_description ) :
		?>

			<p class="site-description">

				<?php echo esc_html( $site_description ); ?>

			</p>

		<?php endif; ?>

	</div>

	<?php
	wp_nav_menu(
		array(
			'theme_location'       => 'primary',
			'container'            => 'nav',
			'container_class'      => 'main-navigation',
			'container_aria_label' => esc_attr__( 'Primary Navigation', 'chy-company-theme' ),
			'menu_id'              => 'primary-menu',
			'fallback_cb'          => false,
		)
	);
	?>
</div>
</header>
