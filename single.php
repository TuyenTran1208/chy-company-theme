<?php
/**
 * Single post template.
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

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'single' );

		the_post_navigation(
			array(
				'prev_text' => sprintf(
					'<span class="nav-subtitle">%s</span><span class="nav-title">%%title</span>',
					esc_html__( 'Previous:', 'chy-company-theme' )
				),
				'next_text' => sprintf(
					'<span class="nav-subtitle">%s</span><span class="nav-title">%%title</span>',
					esc_html__( 'Next:', 'chy-company-theme' )
				),
			)
		);

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	endwhile;
	?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
