<?php

$headingStart   = $attributes['headingStart'];
$headingEnd     = $attributes['headingEnd'];
$pinkText       = $attributes['pinkText'];
$subheadingText = $attributes['subheadingText'];
$inputText      = $attributes['inputText'];
$buttonText     = $attributes['buttonText'];

?>
<div class="fullwidth-cta p-5 pt-5 mb-5 text-center">
	<h2 class="mx-auto py-4"><?= $headingStart ?><span
			style="color: var(--pcm-pink)"> <?= $pinkText ?> </span><?= $headingEnd ?>
	</h2>
	<h3 class="pb-3"><?= $subheadingText ?></h3>
	<div class="email-cta-masthead__form">
		<input type="text" placeholder="<?= $inputText ?>"/>
		<br/>
		<button class="solid-pill mt-3 mb-5"><?= $buttonText ?></button>
	</div>
</div>
