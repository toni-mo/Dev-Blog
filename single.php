<?php get_header(); ?>

<div class="container-fluid page main-background">
	<div class="row">
		<div class="col-md-12 page">
		<h1>This is single.php for the certain post</h1>
			<?php 
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'content-single', get_post_format() );
					endwhile;
				endif;		
			 ?>			
		</div>
	</div>
</div>

<?php get_footer(); ?>