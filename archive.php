<?php
/**
 * Archive template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="site-content">

	<main id="primary" class="site-main">

		<?php chy_company_theme_breadcrumb(); ?>

		<header class="page-header">

			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>

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

</div>

<?php get_footer(); ?>
