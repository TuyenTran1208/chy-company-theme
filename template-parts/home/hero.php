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
$site_description = get_bloginfo( 'description' );
$hero_heading_id  = 'home-hero-title';
$hero_intro       = __( 'Chúng tôi cung cấp các giải pháp chuyên nghiệp giúp doanh nghiệp của bạn phát triển bền vững.', 'chy-company-theme' );
?>

<section class="home-hero" aria-labelledby="<?php echo esc_attr( $hero_heading_id ); ?>">
	<div class="container">
		<div class="home-hero__layout">
			<div class="home-hero__content">
				<h1 id="<?php echo esc_attr( $hero_heading_id ); ?>" class="home-hero__title">
					<?php echo esc_html( $site_name ); ?>
				</h1>

				<p class="home-hero__tagline">
					<?php echo esc_html( $site_description ); ?>
				</p>

				<p class="home-hero__intro">
					<?php echo esc_html( $hero_intro ); ?>
				</p>

				<div class="home-hero__actions">
					<a class="home-hero__button" href="<?php echo esc_url( '#' ); ?>">
						<?php esc_html_e( 'Liên hệ', 'chy-company-theme' ); ?>
					</a>

					<a class="home-hero__button home-hero__button--secondary" href="<?php echo esc_url( '#' ); ?>">
						<?php esc_html_e( 'Dịch vụ', 'chy-company-theme' ); ?>
					</a>
				</div>
			</div>

			<div class="home-hero__banner" role="img" aria-label="<?php echo esc_attr__( 'Company Image placeholder', 'chy-company-theme' ); ?>">
				<span><?php esc_html_e( 'Company Image', 'chy-company-theme' ); ?></span>
			</div>
		</div>
	</div>
</section>

