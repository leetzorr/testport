<?php get_header(); //include header.php ?>
<div id="container" class="i-g clearfix">
<main id="content" class="i-8 i-mp-4 i-ml-4 i-tp-4 i-tl-4">
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="clearfix" <?php post_class(); ?>>
			
			<img src="http://placehold.it/125x125">
			<div class="listing-content">
				<div class="postmeta">
					<!-- 
					<span class="author"> Posted by: <?php the_author(); ?></span>
					<span class="num-comments"> <?php comments_number(); ?></span>
					<span class="categories"><?php the_category(); ?></span>
					--> 
					<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
					<span class="tags"><?php the_tags(); ?></span> 
				</div><!-- end postmeta -->	
				<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
				</h2>

				<!--<?php 
				//display an <img> with the featured image
				the_post_thumbnail( 'thumbnail' );  ?>-->

				<div class="entry-content">
					<?php the_excerpt();  //short version of the_content() ?>
				</div>
			</div>
			
					
		</article><!-- end post -->

		<?php endwhile; ?>

		<section class="pagination">
			<?php 
			//The safe way to run plugin functions
			//Check to see if the plugin is active before calling its functions
			//fallback to the default WP pagination
			if( function_exists('wp_pagenavi')  AND ! wp_is_mobile() ){
				wp_pagenavi();
			}else{
				previous_posts_link( '&larr; Newer Posts' ); 	//10 newer posts
				next_posts_link( 'Older Posts &rarr;' );  		//10 older posts
			}
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