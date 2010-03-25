<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<header class="page-header">
	<h2 class="title"><?php the_title(); ?></h2>
</header>
<section class="content page-content">
	<?php the_content(); ?>
</section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>