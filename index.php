

<?php 
	/* router */
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>

<?php include("modules/header.php");?>

<?php	
		if ($page == "home") {
		include('pages/home.php');
		} 

		if($page == "case-study&projectID=0") {
			include('pages/case-study.php');
		}

		if($page == "style-guide") {
			include('pages/style-guide.php');
		}

		if($page == "goals") {
			include('pages/goals.php');
		}

		if($page == 'php-exercises') {
			include('pages/php-exercises.php');
		}
?>

		
<?php include("modules/footer.php");?>
