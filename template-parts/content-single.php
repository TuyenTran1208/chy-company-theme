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

<section class="author-box">

	<h2>
		<?php esc_html_e( 'About the Author', 'chy-company-theme' ); ?>
	</h2>

	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
	</div>

	<div class="author-info">

		<h3>
			<?php the_author(); ?>
		</h3>

		<p>
			<?php the_author_meta( 'description' ); ?>
		</p>

	</div>

</section>

<?php

$related_posts = new WP_Query(
	array(
		'posts_per_page'      => 3,
		'post__not_in'        => array( get_the_ID() ),
		'ignore_sticky_posts' => true,
		'category__in'        => wp_get_post_categories( get_the_ID() ),
	)
);

if ( $related_posts->have_posts() ) :
?>

<section class="related-posts">

	<h2>
		<?php esc_html_e( 'Related Posts', 'chy-company-theme' ); ?>
	</h2>

	<ul>

		<?php
		while ( $related_posts->have_posts() ) :
			$related_posts->the_post();
		?>

			<li>

				<a href="<?php the_permalink(); ?>">

					<?php the_title(); ?>

				</a>

			</li>

		<?php endwhile; ?>

	</ul>

</section>

<?php
endif;

wp_reset_postdata();
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
