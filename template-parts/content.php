<?php
/**
 * Template part for displaying posts.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$published_date     = get_the_date();
$published_datetime = get_the_date( 'c' );
$author_name        = get_the_author();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<h2 class="entry-title">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>
		<?php endif; ?>

		<?php if ( is_singular( 'post' ) ) : ?>
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
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php
		if ( is_singular() ) {
			the_content();

			wp_link_pages(
				array(
					'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page navigation', 'chy-company-theme' ) . '">',
					'after'  => '</nav>',
				)
			);
		} else {
			the_excerpt();
		}
		?>
	</div>

	<?php if ( is_singular( 'post' ) ) : ?>
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
	<?php endif; ?>
</article>
