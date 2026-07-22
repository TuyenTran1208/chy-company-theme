<?php
/**
 * Theme template tags.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Display breadcrumb navigation.
 *
 * @return void
 */
function chy_company_theme_breadcrumb() {

	if ( is_front_page() ) {
		return;
	}
	?>

	<nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'chy-company-theme' ); ?>">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Home', 'chy-company-theme' ); ?>
		</a>

		<?php if ( is_page() ) : ?>

			<span> / </span>

			<span><?php the_title(); ?></span>

		<?php elseif ( is_single() ) : ?>

			<span> / </span>

			<?php the_category( ', ' ); ?>

			<span> / </span>

			<span><?php the_title(); ?></span>

		<?php elseif ( is_archive() ) : ?>

			<span> / </span>

			<?php the_archive_title(); ?>

		<?php elseif ( is_search() ) : ?>

			<span> / </span>

			<?php
			printf(
				esc_html__( 'Search: %s', 'chy-company-theme' ),
				esc_html( get_search_query() )
			);
			?>

		<?php elseif ( is_404() ) : ?>

			<span> / </span>

			<?php esc_html_e( '404', 'chy-company-theme' ); ?>

		<?php endif; ?>

	</nav>

	<?php
}
