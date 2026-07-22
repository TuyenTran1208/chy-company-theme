<?php
/**
 * 404 error template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( '404', 'chy-company-theme' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e( 'The page you are looking for could not be found.', 'chy-company-theme' ); ?></p>

			<?php get_search_form(); ?>

			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'Back to home', 'chy-company-theme' ); ?>
				</a>
			</p>
		</div>
	</section>
</main>

<?php get_footer(); ?>
