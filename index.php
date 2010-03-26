<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */

get_header(); ?>
<?php if (have_posts()): ?>
<section id="posts">
  <?php while (have_posts()) : the_post(); ?>
    <article class="post-wrap" id="post-<?php the_ID(); ?>">
      <header>
        <time class="date-posted" datetime="<?php the_time('c'); ?>"><?php the_date(); ?></time>
        <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      </header>
      <section class="post-excerpt">
        <?php the_excerpt(); ?>
      </section>
     </article>
    <?php endwhile; ?>
</section>  
<?php else: ?>
<p class="alert"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php if (will_paginate()): ?>
<nav>
 <ul id="pagination">
   <li class="previous"><?php posts_nav_link('','','&laquo; Previous Entries') ?></li>
   <li class="future"><?php posts_nav_link('','Next Entries &raquo;','') ?></li>
 </ul>
</nav>  
<?php endif; ?>
<?php get_footer(); ?>