<?php get_header(); ?>
<div class="container">
	<div class="row border">
		<div class="col-md-7 offset-md-2 border">
			<?php 
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part('content', get_post_format());
					endwhile;
				endif;
			 ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>