<?php
/**
 * Template part for displaying single posts.
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
				'before' => '<nav class="page-links">',
				'after'  => '</nav>',
			)
		);
		?>

	</div>

	<footer class="entry-footer">

		<?php if ( has_category() ) : ?>

			<div class="post-categories">

				<strong>
					<?php esc_html_e( 'Categories:', 'chy-company-theme' ); ?>
				</strong>

				<?php the_category( ', ' ); ?>

			</div>

		<?php endif; ?>

		<?php if ( has_tag() ) : ?>

			<?php
			the_tags(
				'<div class="post-tags"><strong>' .
				esc_html__( 'Tags:', 'chy-company-theme' ) .
				'</strong> ',
				', ',
				'</div>'
			);
			?>

		<?php endif; ?>

	</footer>

</article>
