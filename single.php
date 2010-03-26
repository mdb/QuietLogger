<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<article class="post" id="post-<?php the_ID(); ?>">
  <header>
    <time class="date-posted" datetime="<?php the_time('c'); ?>"><?php the_date(); ?></time>
    <h2 class="post-title"><?php the_title(); ?></h2>
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
<nav class="post-navigator">
	<ul>
		<li class="prev"><?php previous_post_link('&laquo; %link') ?></li>
		<li class="next"><?php next_post_link('%link &raquo;') ?></li>
	</ul>
</nav>
<?php comments_template(); endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>