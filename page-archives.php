<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */
 /*
Template Name: Archives - page
*/

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<header class="page-header">
	<h2 class="title"><?php the_title(); ?></h2>
</header>
<section class="content page-content">
	<ul class="archives">
		<?php $recentPosts = new WP_Query("showposts=20"); while($recentPosts->have_posts()) : $recentPosts->the_post();?>
		<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br />
    <time class="date-posted" datetime="<?php the_time('c'); ?>">Posted <?php the_date(); ?></time>
    </li>
		<?php endwhile; ?>
	</ul>
</section>
<section class="content page-content">
	<ul class="archives">
	<?php wp_get_archives(); ?>
	</ul>
</section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>