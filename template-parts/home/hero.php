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
$hero_intro       = __( 'We provide enterprise-grade solutions designed to scale, secure, and streamline your business operations. Experience the next generation of digital infrastructure.', 'chy-company-theme' );
?>

<section class="home-hero" aria-labelledby="<?php echo esc_attr( $hero_heading_id ); ?>">
	<div class="container">
		<div class="home-hero__layout">
			<div class="home-hero__content">
				<span class="home-hero__badge">
					<?php esc_html_e( 'Enterprise Platform', 'chy-company-theme' ); ?>
				</span>

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
						<?php esc_html_e( 'Explore Solutions', 'chy-company-theme' ); ?>
					</a>

					<a class="home-hero__button home-hero__button--secondary" href="<?php echo esc_url( '#' ); ?>">
						<?php esc_html_e( 'Talk to Sales', 'chy-company-theme' ); ?>
					</a>
				</div>

				<p class="home-hero__trust">
					✓ <?php esc_html_e( 'Enterprise-grade security & 24/7 dedicated support', 'chy-company-theme' ); ?>
				</p>

				<div class="home-hero__stats">
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">500+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Enterprise Clients', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">99.9%</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Uptime SLA', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">15+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Years Experience', 'chy-company-theme' ); ?></span>
					</div>
				</div>
			</div>

			<div class="home-hero__banner" role="img" aria-label="<?php echo esc_attr__( 'Hero Illustration Placeholder', 'chy-company-theme' ); ?>">
				<div class="home-hero__banner-window">
					<div class="home-hero__banner-header">
						<span class="home-hero__banner-dot"></span>
						<span class="home-hero__banner-dot"></span>
						<span class="home-hero__banner-dot"></span>
					</div>
					<div class="home-hero__banner-body">
						<div class="home-hero__banner-sidebar">
							<div class="home-hero__banner-navitem"></div>
							<div class="home-hero__banner-navitem"></div>
							<div class="home-hero__banner-navitem"></div>
						</div>
						<div class="home-hero__banner-main">
							<span class="home-hero__banner-label"><?php esc_html_e( 'Hero Illustration Placeholder', 'chy-company-theme' ); ?></span>
							<div class="home-hero__banner-card">
								<div class="home-hero__banner-line"></div>
								<div class="home-hero__banner-line home-hero__banner-line--short"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>






