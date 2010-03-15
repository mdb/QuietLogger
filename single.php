<?php
  /*
  *@desc A single blog post
  */
  get_header();
  if (have_posts()) : while (have_posts()) : the_post();
  ?>
<article class="post" id="post-<?php the_ID(); ?>">
  <header>
    <time class="date-posted"><?php the_date(); ?></time>
    <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </header>
  <section class="content">
    <?php the_content(); ?>
  </section>
  <footer class="post-meta">
    <small>Posted in <?php the_category(', '); ?>
    <?php if (has_tag()) { ?>
    and tagged <?php the_tags(' '); ?>
    <?php } ?>
    </small>
  </footer>
</article>
<?php comments_template(); endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>