<?php get_header(); ?>

<div id="main-col">

	<?php if (have_posts()) : ?>
	
		<h2>Search Results</h2>
	
		<div class="navigation">
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	
		<?php while (have_posts()) : the_post(); ?>
	
			<ul>
				<li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			</ul>
	
		<?php endwhile; ?>
	
		<div class="navigation">
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	
	<?php else : ?>
	
		<h2>No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
	<?php endif; ?>
	
</div>

<?php include (TEMPLATEPATH . '/socialsidebar.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>