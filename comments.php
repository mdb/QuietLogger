<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
<ol class="comment-list">
<?php wp_list_comments(); ?>
</ol>

<div class="navigation">
  <ul>
    <li><?php previous_comments_link() ?></li>
    <li><?php next_comments_link() ?></li>
  </ul>
</nav>
</div>
<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond" class="simple-form clearfix">
<h3><?php comment_form_title( 'Share a comment', 'Leave a Reply to %s' ); ?></h3>
<small><?php cancel_comment_reply_link(); ?></small>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  <ol class="form-elements">

    <li>
      <label for="author">Name <?php if ($req) echo "(required)"; ?></label>
      <input class="text" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    </li>
    <li>
      <label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
      <input class="text" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    </li>
    <li>
      <label for="url">Website</label>
      <input class="text" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
    </li>
    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
    <?php do_action('comment_form', $post->ID); ?>
    <li>
      <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
    </li>

    <li>
      <input name="submit" type="submit" id="submit" class="button" tabindex="5" value="Submit Comment" />
      <?php comment_id_fields(); ?>
    </li>
  </ol>
</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
