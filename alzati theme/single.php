<?php get_header() ?>

<main id="main" class="site-main" role="main">
	<article id="post-<?php the_ID(); ?>" class="card">
	
		<?php while ( have_posts() ) : the_post();?>
		<div class="post-container">
		    <header class="post-header">
				<h2 class="post-title"><?php echo the_title(); ?><h2>
			</header>
			<div class="post-content">
				<div class="default-image">
                   <?php the_post_thumbnail( 'single-post-thumbnail' ); ?> 
                </div>
				<div class="post-contents">
					<?php  echo the_content();?>
				</div>
			</div>
		</div>
		

		<footer class="post-footer">
			<h3> Return To Category: <? the_category(): ?> </h3>
			<p>generated by: single.php using to display single post content</p>
			<p>template location: <span class="attention">single.php</span></p>
		</footer>

	</article>
	<?php endwhile; ?>
	
</main>

<?php get_footer(); ?>