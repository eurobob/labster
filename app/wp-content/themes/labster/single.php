<?php get_header(); ?>

<div class="area">
	<div class="area__inner">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		?>
			<section class="post" data-slug="<?php echo $post->post_name; ?>">
			    <article class="post__content">
					<h1><?php the_title(); ?></h1>
			        <?php the_content(); ?>
			    </article>
			</section>
		<?php

	// End the loop.
	endwhile;
	?>
	</div>
</div>

<?php get_footer(); ?>