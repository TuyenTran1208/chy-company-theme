<?php
/**
 * Search results template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				'%1$s %2$s',
				esc_html__( 'Search results for:', 'chy-company-theme' ),
				esc_html( get_search_query() )
			);
			?>
		</h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="search-results">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					</header>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<section class="no-results not-found">
			<h2 class="entry-title"><?php esc_html_e( 'No results found.', 'chy-company-theme' ); ?></h2>
			<p><?php esc_html_e( 'Please try another search term.', 'chy-company-theme' ); ?></p>
		</section>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
