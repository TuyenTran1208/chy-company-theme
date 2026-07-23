<?php
/**
 * Home hero section.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$site_name        = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
$hero_heading_id  = 'home-hero-title';
?>

<section class="home-hero" aria-labelledby="<?php echo esc_attr( $hero_heading_id ); ?>">
	<div class="container">
		<h1 id="<?php echo esc_attr( $hero_heading_id ); ?>" class="home-hero__title">
			<?php echo esc_html( $site_name ); ?>
		</h1>

		<p class="home-hero__description">
			<?php echo esc_html( $site_description ); ?>
		</p>
	</div>
</section>
