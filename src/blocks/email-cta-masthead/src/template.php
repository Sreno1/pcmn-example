<?php

$headingStart = $attributes['headingStart'];
$headingEnd   = $attributes['headingEnd'];
$pinkText     = $attributes['pinkText'];
$contentText  = $attributes['contentText'];
$inputText    = $attributes['inputText'];
$buttonText   = $attributes['buttonText'];
$imageUrl     = $attributes['imageURL'];
$imageAlt     = $attributes['imageAlt'];
$marqueeText  = $attributes['marqueeText'];

?>
<div class="email-cta-masthead">
	<div class="masthead-main-content">
		<div class="container">
			<div class="row align-items-start">
				<div class="col-lg-6">
					<h2><?= $headingStart ?><br/><span
							style="color: var(--pcm-pink)"><?= $pinkText ?></span><br/><?= $headingEnd ?>
					</h2>
					<p><?= $contentText ?></p>
					<div class="email-cta-masthead__form">
						<div class="form-group">
							<input id="email" name="email" class="inputText" type="text" required/>
							<label class="form-control-label" for="email"><?= $inputText ?></label>
						</div>
						<br/>
						<button class="solid-pill mt-3 py-3"><?= $buttonText ?></button>
					</div>
				</div>
				<div class="col-lg-6 imgCol">
					<img src="<?= esc_url( $imageUrl ) ?>" alt="<?= esc_attr( $imageAlt ) ?>"
						 class="email-cta-masthead__image"/>
				</div>
			</div>
		</div>
	</div>
	<div class="marquee p-2">
		<div><?= $marqueeText ?></div>
	</div>
</div>
