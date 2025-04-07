<?php
$headingText  = $attributes['headingText'];
$testimonials = [
	[
		'text'    => $attributes['test1Text'],
		'name'    => $attributes['test1Name'],
		'busName' => $attributes['test1BusName']
	],
	[
		'text'    => $attributes['test2Text'],
		'name'    => $attributes['test2Name'],
		'busName' => $attributes['test2BusName']
	],
	[
		'text'    => $attributes['test3Text'],
		'name'    => $attributes['test3Name'],
		'busName' => $attributes['test3BusName']
	]
];
?>
<div class="three-testimonials container mx-auto p-4 pt-5 mb-5">
	<h2 class="text-center pcm-pink">testimonials</h2>
	<h3 class="text-center mb-4 pb-4"><?= $headingText ?></h3>
	<div class="three-testimonials row">
		<?php foreach ( $testimonials as $testimonial ) : ?>
			<div class="col px-5 pt-5 pb-2 mx-3">
				<img class="quotation" src="/wp-content/themes/pcmn-example/assets/images/quote.png"/>
				<p class="testText"><?= $testimonial['text'] ?></p>
				<img src="/wp-content/themes/pcmn-example/assets/images/5star.png"/>
				<p class="testName"><?= $testimonial['name'] ?></p>
				<p class="testBus"><?= $testimonial['busName'] ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>
