<?php

/**
 * Template Name: Default Page
 */
get_header(); ?>
	
	<div class="container">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php else: ?>

			<h2>No posts</h2>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>