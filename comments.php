<?php
/**
 * Comments template.
 *
 * @package Chy_Company_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<?php $comment_count = get_comments_number(); ?>

		<h2 class="comments-title">
			<?php
			printf(
				esc_html(
					_n(
						'%s Comment',
						'%s Comments',
						$comment_count,
						'chy-company-theme'
					)
				),
				esc_html( number_format_i18n( $comment_count ) )
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments">
				<?php esc_html_e( 'Comments are closed.', 'chy-company-theme' ); ?>
			</p>
		<?php endif; ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
