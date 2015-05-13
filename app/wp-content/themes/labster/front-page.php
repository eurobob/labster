<?php get_header(); ?>

<?php 
	$music = new WP_Query("posts_per_page=-1&orderby=post_date&order=DESC&post_status=publish");

	if($music->have_posts()) :
	  while($music->have_posts()) :
	    $music->the_post();
	?>

	        <section class="post" data-slug="<?php echo $post->post_name; ?>">
	        	<h1><?php the_title(); ?></h1>
	        </section>

	<?php 
	    endwhile;
	endif;
?>

<?php get_footer(); ?>