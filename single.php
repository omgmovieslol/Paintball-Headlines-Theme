<?php get_header(); ?>

<div id="main-col">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
		
			<h2>
				<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>

			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<p>By: <?php the_author_posts_link(); ?>
			<?php
			
			if(get_the_category() != null || get_the_tags() != null):
			
			?>
			| <?php the_category(', '); ?>
			
			<?php
			
			if(get_the_category() != null && get_the_tags() != null):
			
			?>
			 , <?php the_tags('', ', ', ''); ?>
			
			<?php
			
			endif;
			
			endif;
			
			?>
			</p>

		</div>

		<?php comments_template(); ?>
	
		<?php endwhile; else: ?>
	
			<p>Sorry, no posts matched your criteria.</p>
	
		<?php endif; ?>
	
	</div>

<?php include (TEMPLATEPATH . '/socialsidebar.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>