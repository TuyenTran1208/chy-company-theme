<?php
/**
 * Main template fallback.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
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
