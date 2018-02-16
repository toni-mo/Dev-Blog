<?php get_header(); ?>
<div class="container-fluid main-background">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<!-- <h1 class="posts-title">Posts</h1> -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-7 offset-md-2 posts-container">
		<?php 
				// echo $_GET[category[0]];
				$keyword = $_GET[search]; 
				$category = $_GET[category];
				echo "<br>Category1:".$category[0].'<br> Category2:'.$category[1]."<br>Search word:".$keyword."<br>";
				if($keyword == '')
					echo "Variable keyboard is empty string"."<br>";
				else
					echo "Variable keyboard is not an empty string"."<br>";

				if(empty($category))
					echo "CATEGORY array is empty";
				else
					echo "CATEGORY array is not empty";
				// $cat = $category[0];
			?>
			<?php 
				// $args = array(
				// 		's' => '',
				// 		'category_name' => $category[0].','.$category[1]
				// 	);

				$args = array();

				if($keyword != ''){
					$args['s'] = $keyword;
				}
				elseif (!empty($category)){
					$args['category_name'] = implode(',', $category);
				}
				elseif(($keybord == '') && (empty($category))){
					// $args['s'] = $keyword;
					// $args['category_name'] = implode(',', $category);
					$args['post_type'] = 'post';
				}


				$the_query = new WP_Query($args);

			?>
		<div class="search-bar">
			<form action="index.php" method="get" >
				<input type="text" name="search" placeholder="Post name">
				<button type="submit">
					<i class="fa fa-search fa-lg"></i>
				</button>
			
				<input type="checkbox" name="category[]" value="development" <?php if($category[0] == 'development' || $category[1] == 'development'): echo 'checked'; endif; ?> >
				Development
				<input type="checkbox" name="category[]" value="life" <?php if($category[0]=='life' || $category[1] == 'life'): echo 'checked'; endif; ?> >
				About life
				<input type="submit" value="Apply filters">
			</form>

			<!-- <?php $option = 'anton'; ?>
			<input type="radio" name="option" value="<?php echo $option ?>">
			<input type="radio" name="option" value="<?php echo $option ?>">
			<?php echo $option ?><br> -->
		</div>
		<div>
			
			
		</div>
			<?php 
				// if( have_posts() ):
				// 	while( have_posts() ):
				// 		the_post();
				// 		get_template_part('blog-content', get_post_format());
				// 	endwhile;
				// endif;

				if(have_posts()):
					while($the_query->have_posts()):
						$the_query->the_post();
						get_template_part('blog-content', get_post_format());
						endwhile;
				endif;
			 ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>