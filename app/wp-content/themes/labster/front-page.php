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
	        	<div class="post__date">
	        		<span>16/05</span>
	        		<span>2015</span>
	        	</div>
	        	<div class="post__info">
		        	<h1 class="post__title">
		        		<a href="<?php echo $post->post_name; ?>">
		        			<?php the_title(); ?>
		        		</a>
		        	</h1>
		        	<?php if(function_exists('mtr_print')) mtr_print($post->ID); ?>
		        </div>
	        </section>

	<?php 
	    endwhile;
	endif;
?>
	</div>
</div>

<?php get_footer(); ?>