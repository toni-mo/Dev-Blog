<!DOCTYPE html>
<html>
<head>
	<!-- <title>
		<?php echo get_bloginfo('name'); ?>
	</title> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	<script src="https://use.fontawesome.com/ace50c9721.js"></script>
	<?php wp_head(); ?>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css"> -->
</head>
<body>
	<header class="">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 header">
					<h1 class="">
						<a href="<?php echo get_bloginfo('wpurl'); ?>">
							<?php echo get_bloginfo('name'); ?>
						</a>
					</h1>
					<p class="">
						<?php echo get_bloginfo('description'); ?>
					</p>
				</div>
			</div>
			<!-- Navigation -->
			<div class="row navigation">
				<div class="col-md-6 navigation-container offset-md-3">
				
					<nav>
						<!-- <li><a class="" href="<?php echo get_bloginfo('wpurl'); ?>">Home</a></li> -->
						<?php wp_list_pages('&title_li='); ?>
					</nav>
				</div>
			</div>
			<!-- /Navigation -->
		</div>
	</header>
	
	