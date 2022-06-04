
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('genres') ) {
		include("templates/pages/genres.php");
	}

	if ( is_singular('genre') ) {
		include('templates/pages/genre-genre-name.php');
	}

	if(is_page('all-books')) {
		include('templates/pages/all-books.php');
	}
?>

<?php get_footer(); ?>