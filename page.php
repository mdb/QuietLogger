<?php

  /**
  *@desc A page. See single.php is for a blog post layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

	<article class="postWrapper" id="post-<?php the_ID(); ?>">

		<header>

		    <h1 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		    <small><?php the_date(); ?> by <?php the_author(); ?></small>

		</header>

      	<?php echo get_avatar( $comment, 32 ); ?>  
      
		<section class="post"><?php the_content(__('(more...)')); ?></section>
		<footer class="postMeta"><?php edit_post_link(__('Edit'), ''); ?></footer>

    </article>

  <?php
  comments_template();

  endwhile; else: ?>

    <p>Sorry, no pages matched your criteria.</p>

<?php
  endif;

  get_footer();
?>