<?php
/**
 * Template part for displaying a message when no content is available.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'No content found.', 'chy-company-theme' ); ?></h1>
	</header>

	<div class="page-content">
		<p><?php esc_html_e( 'There is no content available at this time.', 'chy-company-theme' ); ?></p>
	</div>
</section>
