<?php

// Extract the 'title' attribute. Fallback to 'unknown'.
$headingText = $attributes['headingText'];
$contentText = $attributes['contentText'];
$imageUrl    = $attributes['imageURL'];
$imageAlt    = $attributes['imageAlt'];

?>
<div class="image-card p-4 pt-5">
	<img src="<?= $imageUrl ?>" alt="<?= $imageAlt ?> "/>
	<div class="image-card__content mt-4">
		<h3><?= $headingText ?></h3>
		<p class="mt-3"><?= $contentText ?></p>
	</div>
</div>
