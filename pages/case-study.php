<?php 
	

	$projects = getData('data/projects.json');
	$current_project_id = $_GET["projectID"]; 

	foreach($projects as $projectID => $project) { 
 		if($current_project_id == $projectID) { 
			renderPage( getData('data/' . $page . '.json') );
		} else {
				echo "<h1>This the Case Study of a different project</h1>";
			 } 
	}
?>






			

