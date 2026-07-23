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
$hero_intro       = __( 'Chúng tôi cung cấp các giải pháp công nghệ quy mô doanh nghiệp giúp tối ưu hóa, bảo mật và phát triển hạ tầng số của bạn.', 'chy-company-theme' );
?>

<section class="home-hero" aria-labelledby="<?php echo esc_attr( $hero_heading_id ); ?>">
	<div class="container">
		<div class="home-hero__layout">
			<div class="home-hero__content">
				<span class="home-hero__badge">
					<?php esc_html_e( 'Enterprise Platform', 'chy-company-theme' ); ?>
				</span>

				<h1 id="<?php echo esc_attr( $hero_heading_id ); ?>" class="home-hero__title">
					<?php echo esc_html( $site_name ? $site_name : 'Cao Hưng Ý' ); ?>
				</h1>

				<p class="home-hero__tagline">
					<?php echo esc_html( $site_description ? $site_description : 'Công ty TNHH Dịch Vụ Tin Học Cao Hưng Ý' ); ?>
				</p>

				<p class="home-hero__intro">
					<?php echo esc_html( $hero_intro ); ?>
				</p>

				<div class="home-hero__actions">
					<a class="home-hero__button" href="<?php echo esc_url( '#' ); ?>">
						<?php esc_html_e( 'Khám phá Giải pháp', 'chy-company-theme' ); ?>
					</a>

					<a class="home-hero__button home-hero__button--secondary" href="<?php echo esc_url( '#' ); ?>">
						<?php esc_html_e( 'Tư vấn Ngay', 'chy-company-theme' ); ?>
					</a>
				</div>

				<p class="home-hero__trust">
					✓ <?php esc_html_e( 'Bảo mật chuẩn doanh nghiệp & Hỗ trợ kỹ thuật 24/7', 'chy-company-theme' ); ?>
				</p>

				<div class="home-hero__stats">
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">500+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Khách hàng Doanh nghiệp', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">99.9%</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Cam kết Uptime SLA', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">15+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Năm Kinh nghiệm', 'chy-company-theme' ); ?></span>
					</div>
				</div>
			</div>

			<div class="home-hero__banner" role="img" aria-label="<?php echo esc_attr__( 'Minh họa Giải pháp CNTT Cao Hưng Ý', 'chy-company-theme' ); ?>">
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
							<span class="home-hero__banner-label"><?php esc_html_e( 'Nền Tảng Đồ Họa CNTT Cao Hưng Ý', 'chy-company-theme' ); ?></span>
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







