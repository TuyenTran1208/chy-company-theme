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
$hero_intro       = __( 'Chúng tôi cung cấp các giải pháp phần mềm, bảo mật và hạ tầng đám mây quy mô lớn giúp tối ưu hóa vận hành, gia tăng hiệu suất và tăng trưởng bền vững cho doanh nghiệp Việt.', 'chy-company-theme' );
?>

<section class="home-hero" id="hero" aria-labelledby="<?php echo esc_attr( $hero_heading_id ); ?>">
	<div class="home-hero__bg-shape home-hero__bg-shape--1"></div>
	<div class="home-hero__bg-shape home-hero__bg-shape--2"></div>
	
	<div class="container">
		<div class="home-hero__layout">
			<div class="home-hero__content">
				<div class="home-hero__badge">
					<span class="home-hero__badge-dot"></span>
					<?php esc_html_e( 'Nền Tảng CNTT Doanh Nghiệp', 'chy-company-theme' ); ?>
				</div>

				<h1 id="<?php echo esc_attr( $hero_heading_id ); ?>" class="home-hero__title">
					Kiến Tạo Hạ Tầng Số <br>
					<span class="text-gradient"><?php echo esc_html( $site_name ? $site_name : 'Vững Chắc Cho Doanh Nghiệp' ); ?></span>
				</h1>

				<p class="home-hero__tagline">
					<?php echo esc_html( $site_description ? $site_description : 'Công ty TNHH Dịch Vụ Tin Học Cao Hưng Ý' ); ?>
				</p>

				<p class="home-hero__intro">
					<?php echo esc_html( $hero_intro ); ?>
				</p>

				<div class="home-hero__actions">
					<a class="home-hero__button" href="<?php echo esc_url( '#services' ); ?>">
						<?php esc_html_e( 'Khám Phá Giải Pháp', 'chy-company-theme' ); ?> →
					</a>

					<a class="home-hero__button home-hero__button--secondary" href="<?php echo esc_url( '#contact' ); ?>">
						<?php esc_html_e( 'Tư Vấn Trực Tiếp', 'chy-company-theme' ); ?>
					</a>
				</div>

				<p class="home-hero__trust">
					✓ <?php esc_html_e( 'Bảo mật chuẩn doanh nghiệp & Hỗ trợ kỹ thuật 24/7/365', 'chy-company-theme' ); ?>
				</p>

				<div class="home-hero__stats">
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">15+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Năm Kinh Nghiệm', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">500+</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Khách Hàng Doanh Nghiệp', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">99.9%</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Cam Kết SLA', 'chy-company-theme' ); ?></span>
					</div>
					<div class="home-hero__stat-card">
						<span class="home-hero__stat-number">24/7</span>
						<span class="home-hero__stat-label"><?php esc_html_e( 'Hỗ Trợ Kỹ Thuật', 'chy-company-theme' ); ?></span>
					</div>
				</div>
			</div>

			<div class="home-hero__banner" role="img" aria-label="<?php echo esc_attr__( 'Minh họa Giao diện Quản trị Enterprise Dashboard', 'chy-company-theme' ); ?>">
				<div class="home-hero__banner-window">
					<div class="home-hero__banner-header">
						<span class="home-hero__banner-dot home-hero__banner-dot--red"></span>
						<span class="home-hero__banner-dot home-hero__banner-dot--yellow"></span>
						<span class="home-hero__banner-dot home-hero__banner-dot--green"></span>
						<div class="home-hero__banner-url">https://caohungy.vn/dashboard</div>
					</div>
					<div class="home-hero__banner-body">
						<div class="home-hero__banner-sidebar">
							<div class="home-hero__banner-navitem active"></div>
							<div class="home-hero__banner-navitem"></div>
							<div class="home-hero__banner-navitem"></div>
							<div class="home-hero__banner-navitem"></div>
						</div>
						<div class="home-hero__banner-main">
							<div class="home-hero__banner-hero">
								<span class="home-hero__banner-label"><?php esc_html_e( 'Enterprise Dashboard', 'chy-company-theme' ); ?></span>
								<div class="home-hero__banner-chart">
									<span style="height: 40%;"></span>
									<span style="height: 65%;"></span>
									<span style="height: 50%;"></span>
									<span style="height: 85%;"></span>
									<span style="height: 100%;"></span>
								</div>
							</div>
							<div class="home-hero__banner-grid">
								<div class="home-hero__banner-card">
									<div class="home-hero__banner-line w-80"></div>
									<div class="home-hero__banner-line w-40"></div>
								</div>
								<div class="home-hero__banner-card">
									<div class="home-hero__banner-line w-90"></div>
									<div class="home-hero__banner-line w-60"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Floating Card Badges -->
				<div class="home-hero__floating-card home-hero__floating-card--1">
					<div class="floating-icon floating-icon--blue">🛡️</div>
					<div>
						<strong>Bảo Mật Cao Cấp</strong>
						<small>ISO 27001 Certified</small>
					</div>
				</div>
				<div class="home-hero__floating-card home-hero__floating-card--2">
					<div class="floating-icon floating-icon--green">⚡</div>
					<div>
						<strong>Hiệu Suất Vượt Trội</strong>
						<small>Response < 50ms</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>








