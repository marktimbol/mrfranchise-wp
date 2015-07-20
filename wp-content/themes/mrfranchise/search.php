<?php
get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h3 class="page-title wow fadeInUp"><?php printf( __( '<small>Search Results for:</small> %s', 'twentythirteen' ), get_search_query() ); ?></h3>
		</div>
	</div>
	<div class="row">
		<div class="large-8 medium-8 small-12 columns">
			<div class="main-content">
			<?php
				if( have_posts() ): while( have_posts() ): the_post();
					get_template_part( 'content', get_post_format() );
					endwhile;
				else: 
					get_template_part( 'content', 'none' );
				endif;
			?>

			<div class="clearfix"></div>

	     	<?php 
				if(function_exists('wp_pagenavi')) {
					wp_pagenavi();
				}
			?>

			</div>
		</div>
		<?php get_sidebar(); ?>		
	</div>
</div>

<?php get_footer(); ?>