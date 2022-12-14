<?php
// Pulling in the databases
	$books = getDatabase();
	$genres=getGenreDatabase();

// The update page needs to know what book we're look at. Add-books page does not. 
	$current_book_id = $_GET['book'];
	$book = getBookById($current_book_id);




// This is for validation. If the the fields have no input, the program will return these messages. To avoid errors, because they exist within the form, they need to be initialized here.
	$titleError = null;
	$authorError = null;
	$blurbError = null;
	$book_coverError = null;
// $genreError does not exist because the select element will always have a value

//This is for validation. We only want these variables to return true if the proper conditions are met after the form is submitted. This is just an extra precaution. Probably don't actually need this.
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	$hasBookCover = false;
	$hasGenre = false;



// A semantically easier way to check if the form is submitted.
$submitted = isset($_POST["submitted"]);

// This is what runs when the form is submitted.
	if ($submitted) {	

		if( isset($_POST['title']) ){
			$title = trim($_POST["title"]);

			if( strlen($title) > 0 ) {
					$hasTitle = true;
				} else {
				$titleError = "please add the title";
				}
			}
		
			if( isset($_POST['author']) ){
				$author = trim($_POST["author"]);
		
				if( strlen($author) > 0 ) {
					$hasAuthor = true;
				} else {
					$authorError = "please add the name of the author";
				}
			}

			if( isset($_POST['blurb']) ){
				$blurb = trim($_POST["blurb"]);

				if( strlen($blurb) > 0 ) {
					$hasBlurb = true;
				} else {
					$blurbError = "please add the blurb";
				}
			}

			if ($_FILES['book-cover']['size'] > 0)  {
				$bookcover_filepath = "images/" . $_FILES['book-cover']['name'];
				move_uploaded_file($_FILES['book-cover']['tmp_name'], $bookcover_filepath);
				$book_cover = $bookcover_filepath;
				$hasBookCover = true;
			}	else if(!empty($book['book-cover'])) {
				$book_cover = $book['book-cover'];
				$hasBookCover = true;
			}
				else {
					$book_coverError = "please upload the book's cover";
			}


			if( isset($_POST['genre']) ){
				$genre = intval($_POST["genre"]);
				$hasGenre = true;
			} 

			if ($hasTitle && $hasAuthor && $hasBlurb && $hasGenre) {
					$book = [
						"title" => $title,
						"author" => $author,
						"genre" => $_POST['genre'],
						"blurb" => trim($_POST['blurb']),
						"book-cover" => $book_cover,
					];
					$books[$current_book_id] = $book;
					saveDatabase($books);
					
			}
		}
// display what was updated 
show($book);
// trim($book['blurb']);
?>


<?php include('components/form.php'); ?>


