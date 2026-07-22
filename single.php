<?php
/**
 * Single post template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();

		$published_date     = get_the_date();
		$published_datetime = get_the_date( 'c' );
		$author_name        = get_the_author();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<time class="entry-date published" datetime="<?php echo esc_attr( $published_datetime ); ?>">
						<?php echo esc_html( $published_date ); ?>
					</time>

					<span class="byline">
						<?php
						printf(
							esc_html__( 'By %s', 'chy-company-theme' ),
							esc_html( $author_name )
						);
						?>
					</span>
				</div>
			</header>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page navigation', 'chy-company-theme' ) . '">',
						'after'  => '</nav>',
					)
				);
				?>
			</div>

			<footer class="entry-footer">
				<?php if ( has_category() ) : ?>
					<div class="post-categories">
						<span class="post-categories-label">
							<?php esc_html_e( 'Categories:', 'chy-company-theme' ); ?>
						</span>

						<?php the_category( esc_html_x( ', ', 'list separator', 'chy-company-theme' ) ); ?>
					</div>
				<?php endif; ?>

				<?php if ( has_tag() ) : ?>
					<?php
					the_tags(
						'<div class="post-tags"><span class="post-tags-label">' . esc_html__( 'Tags:', 'chy-company-theme' ) . '</span> ',
						esc_html_x( ', ', 'list separator', 'chy-company-theme' ),
						'</div>'
					);
					?>
				<?php endif; ?>
			</footer>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
