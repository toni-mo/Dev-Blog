
<div class="post-item">
	<div class="post-image ">
		<?php
			the_post_thumbnail( 'thumbnail' );
		?>
	</div>
	<div class="post-content">
		<h4><a href="<?php the_permalink(); ?>"><?php
			the_title();
		?></a></h4>
		<?php
			the_excerpt();
		?>
		<div class="post-date">
			<?php the_date(); ?>
		</div>	
	</div>
</div>

<!-- <div class="row">
	<div class="col-md-2 text-center">
		<?php the_post_thumbnail('thumbnail'); ?>
	</div>
	<div class="col-md-5">
		<a href="#"><?php the_title(); ?></a>
		<p>
			<?php the_excerpt(); ?>
		</p>
	</div>
</div> -->