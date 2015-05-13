<?php get_header(); ?>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		?>
			<section class="post" data-slug="<?php echo $post->post_name; ?>">
			    <article class="area__inner post__content hidden">
					<h1><?php the_title(); ?></h1>
			        <?php the_content(); ?>
			    </article>
			</section>
		<?php

	// End the loop.
	endwhile;
	?>

<?php get_footer(); ?>