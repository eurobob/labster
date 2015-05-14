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
	        	<div class="post__date gamma caps">
	        		<span><?php the_time('d/M'); ?></span>
	        		<span><?php the_time('Y'); ?></span>
	        	</div>
	        	<div class="post__info">
		        	<h1 class="post__title">
		        		<a href="<?php echo $post->post_name; ?>">
		        			<?php the_title(); ?>
		        		</a>
		        	</h1>
		        	<p class="post__excerpt">
		        		<?php echo get_the_excerpt(); ?>
		        		<br>
		        		<a href="<?php echo $post->post_name; ?>" class="btn">
		        			Continue reading
		        		</a>
		        	</p>
		        	<div class="post__details">
		        		<span class="post__detail">
			        		<span class="icon svg-author svg--purple" data-grunticon-embed></span>
			        		<?php the_author(); ?>
			        	</span>
			        	<span class="post__detail">
			        		<span class="icon svg-time svg--purple" data-grunticon-embed></span>
			        		<?php if(function_exists('mtr_print')) mtr_print($post->ID); ?>
			        	</span>
		        	</div>
		        </div>
	        </section>

	<?php 
	    endwhile;
	endif;
?>
	</div>
</div>

<?php get_footer(); ?>