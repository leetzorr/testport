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
			<div class="postmeta">
					<!-- 
					<span class="author"> Posted by: <?php the_author(); ?></span>
					<span class="num-comments"> <?php comments_number(); ?></span>
					<span class="categories"><?php the_category(); ?></span>
					--> 
					<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
					<span class="tags"><?php the_tags(); ?></span> 
				</div><!-- end postmeta -->	
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
				
		</article><!-- end post -->


		<?php endwhile; ?>

		<section class="pagination">
			<?php 			
			previous_post_link( '%link ', 'Older: %title' );	//older	
			next_post_link( '%link', 'Newer: %title' ); 		//newer post
			?>
		</section>

	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main><!-- end #content -->
<?php get_sidebar(); //include sidebar.php ?>
</div>


<?php get_footer(); //include footer.php ?>