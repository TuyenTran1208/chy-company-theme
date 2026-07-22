<?php
/**
 * Search results template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<?php chy_company_theme_breadcrumb(); ?>
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				'%1$s %2$s',
				esc_html__( 'Search results for:', 'chy-company-theme' ),
				esc_html( get_search_query() )
			);
			?>
		</h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content' );
		endwhile;

		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => esc_html__( 'Previous', 'chy-company-theme' ),
				'next_text' => esc_html__( 'Next', 'chy-company-theme' ),
			)
		);
		?>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
