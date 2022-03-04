
<?php
	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);

	$addedBooks_json = file_get_contents("addedBooks.json");
	$database = json_decode($addedBooks_json,true);

	$submitted = isset($_POST["submitted"]);

	$title = null;
	$author = null;
	$blurb = null;
	$genre = null;
	$bookCover = null;
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	$titleError = null;
	$authorError = null;
	$blurbError = null;
	$hasGenre = null;


	if($submitted) {

		if( isset($_POST['title']) ){
			$title = $_POST["title"];

			if( strlen($title) > 0 ) {
				$hasTitle = true;
			} else {
				$titleError = "please add the title";
			}
		}
	
		if( isset($_POST['author']) ){
			$author = $_POST["author"];
			
			if( strlen($author) > 0 ) {
				$hasAuthor = true;
			} else {
				$authorError = "please add the name of the author";

			}

		}

		if( isset($_POST['blurb']) ){
			$blurb = $_POST["blurb"];

			if( strlen($blurb) > 0 ) {
			//maybe change the string length on this? 
				$hasBlurb = true; 
			}  else {
				$blurbError = "please add the blurb";

			}
		}

		if( isset($_POST['genre']) ){
			$genre = intval($_POST["genre"]);
			$hasGenre = true;
		} 

		if ($hasTitle && $hasAuthor &&$hasBlurb &&$hasGenre) {
			$book = [
				"title" => $_POST["title"],
				"author" => $_POST["author"],
				"blurb" => $_POST["blurb"],
				"genre" => intval($_POST["genre"]),
				"book-cover" => "https://peprojects.dev/images/portrait.jpg",

			];
		
			$database[uniqid('a')] = $book;
			$json = json_encode($database);
			file_put_contents("addedBooks.json", $json);
			
		}	
	}

	
?>


<form method="POST">

	<div class="field">
		<label>Book Title</label>
		<input name="title" value="<?=$title?>" placeholder="...">
		<?php if($titleError) {
			echo $titleError;
		} ?>
	</div>

	<div class="field">
		<label>Author Name</label>
		<input name="author" value="<?=$author?>" placeholder="...">
		<?php if($authorError) {
			echo $authorError;
		} ?>
	</div>

	<div class="field">
		<label>Blurb</label>
		<input name="blurb" value="<?=$blurb?>" placeholder="...">
		<?php if($blurbError) {
			echo $blurbError;
		} ?>
	</div>

	<div class="field">
		<label>Genre</label>
		<select name="genre">
			<option disabled>--Please choose an option--</option>
			<?php foreach ($genres as $id => $genre) { ?>
				<option value="<?=$genre[$id]?>"><?=$genre['name']?></option>
			<?php } ?>
		</select>
	</div> 

	<button type='submit' name="submitted">Submit</button>

</form>