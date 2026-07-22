<?php
/**
 * Theme footer template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer id="colophon" class="site-footer">

	<div class="container">

		<div class="site-info">
			<p>
				<?php
				printf(
					esc_html__( '© %1$s %2$s', 'chy-company-theme' ),
					esc_html( wp_date( 'Y' ) ),
					esc_html( get_bloginfo( 'name' ) )
				);
				?>
			</p>
		</div>

	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
