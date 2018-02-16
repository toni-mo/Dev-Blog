<div class="blog-post">
	<h1>Content for certain Post</h1>
	<div class="single-post-image text-center">
			<?php the_post_thumbnail('medium_large'); ?>
	</div>
	<div class="">
		<div class="row">
			<div class="col-md-8 single-post-content">
				<h2 class="blog-post-title single-post-title"><?php the_title(); ?></h2>
				<p class="blog-post-meta">
					<?php the_date(); ?> by 
					<a href="#"><?php the_author(); ?></a>
				</p>

				<div class="post-text">
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	

	<!-- <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p> -->
	<!-- <hr> -->

<!-- the rest of the content -->

</div><!-- /.blog-post -->