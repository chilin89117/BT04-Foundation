<!doctype html>
<html>
	<head>
		<title><?php bloginfo('title'); ?></title>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"
			type="text/css">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/foundation.css" rel="stylesheet"	type="text/css">
		<?php wp_head(); ?>
	</head>
	
	<body>
		<!-- header div copied from Foundation Blog template -->
		<div class="row">
			<div class="large-12 columns">
				<div class="nav-bar right">
				
					<!-- get dynamic menu from WP -->
					<?php wp_nav_menu(); ?>
				
					<!-- static navigation buttons 
					<ul class="button-group">
						<li><a href="#" class="button">Link 1</a></li>
						<li><a href="#" class="button">Link 2</a></li>
						<li><a href="#" class="button">Link 3</a></li>
						<li><a href="#" class="button">Link 4</a></li>
					</ul>
					-->
				</div>
				<h1><?php bloginfo('name'); ?>
					<small><?php bloginfo('description'); ?></small>
				</h1>
				<hr/>
			</div>
		</div>
		
		<!-- this begins a "row" class to include any content in index.php -->
		<div class="row">
	</body>
</html>