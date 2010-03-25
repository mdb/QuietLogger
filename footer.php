<?php
/**
 * @package WordPress
 * @subpackage Quiet Logger
 */
?>
      <footer id="site-footer">
        <?php get_search_form(); ?>
				<nav>
					<ul class="global-nav">
						<li><a title="Home" href="<?php bloginfo('wpurl'); ?>">Home</a></li>
						<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
						<li><a title="RSS" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
					</ul>
				</nav>
      </footer>
    </div>
  </body>
</html>