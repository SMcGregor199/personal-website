<blog-gallery>
	<?php foreach ($blogs as $blog) {   ?>
		<base-blog-card>
			<h3 class="card-title-font"><?=$blog['title']?></h3>
			<p class="paragraph-font"><?=$blog['content']?></p>
			<a href="<?=$blog['link']?>" target="<?=$blog['linkTarget']?>" class="link-font"><?=$blog['linkText']?></a>
		</base-blog-card>
	<?php	} ?>
</blog-gallery>


	
				