<!doctype html> 
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo wp_get_document_title();?></title>
		<meta name="description" content="Welcome to Shayne's rap blog. Where all the good writing on rap lives">
		<meta property="og:image" content="screenshot.png">
		<link rel="stylesheet" href="https://use.typekit.net/dgn2clh.css">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >

		<header class='site-header'>
			<inner-column>
				<?php include('templates/components/site-menu.php'); ?>
			</inner-column>
		</header>

		<main>