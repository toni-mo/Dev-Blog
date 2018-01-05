<?php 
	/* Template Name: homePageTemplate4 */
?>

<?php get_header(); ?>



<div class="container ">
	<div class="row row-content">
		<div class="col-md-6 offset-md-3 home-content">
			<!-- <h2 class="">About</h2> -->
			<hr>
			<div class="text-left">
				<!-- <hr class=""> -->
			</div>
			<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'home-content', get_post_format() );
					endwhile;
				endif;
			?>

			<!-- <div class="text-center">
				<hr class="">
			</div> -->
		</div>
		<div class="col-md-6 offset-3 post-column text-center">
		<h2 class="text-center">Posts</h2>
		<div class="text-center">
			<div class="post-type text-center border">
				<h5>Developing</h5>
			</div>
			<div class="post-type text-center border">
				<h5>Thoughts</h5>
			</div>
		</div>
	</div>
		
	</div>
	<div class="row">
	
	</div>
</div>

<?php get_footer(); ?>
