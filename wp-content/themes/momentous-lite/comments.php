<?php 
/***
 * Comments Template
 *
 * This template displays the current comments of a post and the comment form
 *
 */

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required()) : ?>
	<p><?php _e('Enter password to view comments.', 'momentous-lite'); ?></p>
<?php return; endif; ?>


<?php if ( have_comments() or comments_open() ) : ?>

	<div id="comments">
	
		<?php if ( have_comments() ) : ?>

			<h3 class="comments-title"><span><?php comments_number( '', __('One comment','momentous-lite'), __('% comments','momentous-lite') );?></span></h3>
			
			<ul class="commentlist">
				<?php wp_list_comments( array('callback' => 'momentous_list_comments')); ?>
			</ul>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="comment-pagination clearfix">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
			<?php endif; ?>
			
		<?php endif; ?>

		<?php if ( comments_open() ) : ?>
			<?php comment_form(array(
				'comment_notes_after' => '',
				'title_reply'       => '<span>' . __( 'Leave a Reply', 'momentous-lite') . '</span>',
				'title_reply_to'    => '<span>' . __( 'Leave a Reply to %s', 'momentous-lite') . '</span>' )); ?>
		<?php endif; ?>

	</div>

<?php endif; ?>