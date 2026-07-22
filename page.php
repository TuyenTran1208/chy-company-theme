<?php
/**
 * Page template.
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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
