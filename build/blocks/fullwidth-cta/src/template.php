<?php

$backgroundColor = $attributes['backgroundColor'];
$backgroundColor = $backgroundColor ? $backgroundColor : '#EDF2FC';
$textColor       = $attributes['textColor'];
$textColor       = $textColor ? $textColor : '#343F52';
$headingStart    = $attributes['headingStart'];
$headingEnd      = $attributes['headingEnd'];
$pinkText        = $attributes['pinkText'];
$subheadingText  = $attributes['subheadingText'];
$inputText       = $attributes['inputText'];
$buttonText      = $attributes['buttonText'];

?>
<div style="background-color: <?= $backgroundColor ?>" class="fullwidth-cta p-5 pt-5 mb-5 text-center">
	<h2 style="color: <?= $textColor ?>" class="mx-auto py-4"><?= $headingStart ?>
		<span style="color: var(--pcm-pink)"> <?= $pinkText ?> </span>
		<?= $headingEnd ?></h2>
	<h3 class="pb-3"><?= $subheadingText ?></h3>
	<div class="fullwidth-cta__form">
		<div class="form-group">
			<input id="email-cta" name="email-cta" class="inputText" type="text" required/>
			<label class="form-control-label" for="email-cta"><?= $inputText ?></label>
		</div>
		<br/>
		<button class="solid-pill mt-3 mb-5"><?= $buttonText ?></button>
	</div>
</div>
