<?php get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h2 class="page-title wow fadeInUp large-9 medium-9 small-8 columns"><?php the_title(); ?></h2>
			<div class="large-3 medium-3 small-3 columns">
				<div class="top-social-icons">
					<a href="https://www.facebook.com/SaudiQuote" target="_blank" class="facebook-square"><i class="fa fa-facebook-square fa-2x"></i></a>
					<a href="https://twitter.com/saudiquote" target="_blank" class="twitter-square"><i class="fa fa-twitter-square fa-2x"></i></a>
					<a href="http://linkd.in/13vm0bo" target="_blank" class="linkedin-square"><i class="fa fa-linkedin-square fa-2x"></i></a>
				</div>
			</div>	
			<div class="clearfix"></div>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
			} 	
			?>
		</div>
	</div>
	<div class="row">
		<div class="large-8 medium-8 small-12 columns">
			<div class="main-content">
			<?php
				if( have_posts() ): while( have_posts() ): the_post();	?>			
				<article>
					<h3><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</article>
				<hr />
				<?php
				endwhile;
				endif;
			?>
			</div>
		</div>
		<?php get_sidebar(); ?>		
	</div>
</div>


<?php get_footer(); ?>