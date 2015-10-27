<?php get_header(); //include header.php ?>

<div id="container" class="i-g clearfix">
	<main id="content" class="i-8 i-mp-4 i-ml-4 i-tp-4 i-tl-4">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
				
		</article><!-- end post -->

		<?php endwhile; ?>
	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>
</main><!-- end #content -->
<?php get_sidebar(); //include sidebar.php page was in quotes here ?>
</div><!-- end #content -->


<?php get_footer(); //include footer.php ?>