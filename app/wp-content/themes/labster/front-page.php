<?php get_header(); ?>

<div class="area">
	<div class="area__inner">

<?php 
	$music = new WP_Query("posts_per_page=5&orderby=post_date&order=DESC&post_status=publish");

	if($music->have_posts()) :
	  while($music->have_posts()) :
	    $music->the_post();
	?>

	        <section class="post">
	        	<h1>
	        		<a href="<?php echo $post->post_name; ?>">
	        			<?php the_title(); ?>
	        		</a>
	        	</h1>
	        </section>

	<?php 
	    endwhile;
	endif;
?>
	</div>
</div>

<?php get_footer(); ?>