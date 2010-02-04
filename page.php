<?php get_header(); ?>

<div id="lower-wrap">

	<div id="main-col">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
	
	</div>

<?php
	$page = $_SERVER['REQUEST_URI'];
	$page = explode("?", $page);
	$page = $page[0];
	$page = str_replace("/","",$page);
	$page = str_replace(".php","",$page);
	$page = $page ? $page : 'default'
?>

<?php if(!($page == "web-search")): ?>

<?php include (TEMPLATEPATH . '/socialsidebar.php'); ?>


	<?php get_sidebar(); ?>
	
<?php endif; ?>
	
</div>

<?php get_footer(); ?>