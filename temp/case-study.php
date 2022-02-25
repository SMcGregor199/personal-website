<?php include('modules/projects-database.php'); ?>
<?php $current_projectid = $_GET['projectID'];?>
<section class="case-study">
	<inner-column>
	<?php foreach($projects_database as $project) { ?>

		<?php if($current_projectid == $project['id']){ ?>
			<case-study class="test">
				<article>
					<h1 class="important-voice"><?=$project['goal']?></h1>
					<picture class="screenshot">
						<img src="https://peprojects.dev/images/portrait.jpg">
					</picture>
				</article>

				<article>
					<picture class="screenshot">
						<img src="https://peprojects.dev/images/portrait.jpg">
					</picture>

					<h1 class="important-voice"><?=$project['process']?></h1>
				</article>
				
			</case-study>

			<a href="?page=home" class="intro-voice" rel="toggle">Go Back to Home</a>

	<?php	} ?>
		
<?php } ?>
	</inner-column>
</section>