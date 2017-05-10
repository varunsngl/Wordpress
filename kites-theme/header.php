<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/wordpress/wp-content/themes/kites-theme/style.css">
	<title>My Theme</title>
</head>
<body>
	<?php wp_head(); ?>

	<nav style="background-color: burlywood;">
	<h2>I'm header</h2>
		<?php 
			wp_nav_menu( array( 'theme-location'  => 'my-menu' ) ); 
		?>
	</nav>