<?php
/**
 * Front page template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<?php get_template_part( 'template-parts/home/hero' ); ?>
</main>

<?php get_footer(); ?>
