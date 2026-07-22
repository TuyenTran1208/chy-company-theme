<?php
/**
 * Search form template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text">
			<?php echo esc_html__( 'Search for:', 'chy-company-theme' ); ?>
		</span>

		<input
			type="search"
			class="search-field"
			placeholder="<?php echo esc_attr__( 'Search...', 'chy-company-theme' ); ?>"
			value="<?php echo esc_attr( get_search_query() ); ?>"
			name="s"
		>
	</label>

	<button type="submit" class="search-submit">
		<?php echo esc_html__( 'Search', 'chy-company-theme' ); ?>
	</button>
</form>
