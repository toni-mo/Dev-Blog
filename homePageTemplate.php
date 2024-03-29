<?php 
	/* Template Name: homePageTemplate */
?>

<?php get_header(); ?>



<div class="container-fluid">
	<div class="row row-content">
		<div class="col-md-6 offset-md-3 text-center home-content">
			<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'home-content', get_post_format() );
					endwhile;
				endif;
			?>

			<h2 class="post-title text-center"><b>Posts</b></h2>
			<div class="text-center">
				<div class="post-type text-center border">
					<h5>Developing</h5>
				</div>
				<div class="post-type text-center border">
					<h5>Thoughts</h5>
				</div>
			</div>
		</div>
		<div class="col-md-6 offset-3 post-column text-center">
		
	</div>
		
	</div>
	<div class="row">
	
	</div>
</div>

<?php get_footer(); ?>
