<?php
  $heading = isset($section['moduleTitle']) ?  $section['moduleTitle'] : "Article Module";
  $contents = isset($section['contents']) ? $section['contents'] : ["When I listen to another worker tell me that his factory has shut down, I remember all those men and women on the South Side of Chicago who I stood by and fought for two decades ago after the local steel plant closed. So I have known Islam on three continents before coming to the region where it was first revealed. There is no straight line to realize this promise.","The Internet and television can bring knowledge and information, but also offensive sexuality and mindless violence. The issues that I have described will not be easy to address. It's been several months now since I announced I was running for president. And we should close Guantanamo Bay and stop tolerating the torture of our enemies."];
  $link = isset($section['moduleLink']) ? $section['moduleLink'] : "#";
  $linkText = isset($section['moduleLinkText']) ? $section['moduleLinkText'] : "Link";
?>

<article>
	<h2 class="section-heading-font"> <?=$heading?> </h2>
	<?php foreach ($contents as $content) { ?>
		<p class="paragraph-font"> <?=$content?> </p>
	<?php } ?>
	<a href="<?=$link?>" target="<?=$heading?>" class="link-font"> <?=$linkText?> </a>
</article>

<?php 
	unset($heading,$contents,$link, $linkText);
?>


