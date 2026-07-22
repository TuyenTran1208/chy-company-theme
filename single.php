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
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content' );
	endwhile;
	?>
</main>

<?php get_footer(); ?>
