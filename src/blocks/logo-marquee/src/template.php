<?php

// for each out of 7
$num = 7;

$introText = $attributes['introText'];

// get the image url and alt text
$image1Url = $attributes['image1URL'];
$image1Alt = $attributes['image1Alt'];
$image2Url = $attributes['image2URL'];
$image2Alt = $attributes['image2Alt'];
$image3Url = $attributes['image3URL'];
$image3Alt = $attributes['image3Alt'];
$image4Url = $attributes['image4URL'];
$image4Alt = $attributes['image4Alt'];
$image5Url = $attributes['image5URL'];
$image5Alt = $attributes['image5Alt'];
$image6Url = $attributes['image6URL'];
$image6Alt = $attributes['image6Alt'];
$image7Url = $attributes['image7URL'];
$image7Alt = $attributes['image7Alt'];

// define array
$images = array(
	'image1Url' => $image1Url,
	'image1Alt' => $image1Alt,
	'image2Url' => $image2Url,
	'image2Alt' => $image2Alt,
	'image3Url' => $image3Url,
	'image3Alt' => $image3Alt,
	'image4Url' => $image4Url,
	'image4Alt' => $image4Alt,
	'image5Url' => $image5Url,
	'image5Alt' => $image5Alt,
	'image6Url' => $image6Url,
	'image6Alt' => $image6Alt,
	'image7Url' => $image7Url,
	'image7Alt' => $image7Alt
);

?>
<div class="logo-marquee container row p-4 pb-2 mb-3 pt-5 mt-4 text-center mx-auto">
    <h3 class="text-center pb-3"><?= $introText ?></h3>
	<?php for ( $i = 1; $i <= $num; $i ++ ) :
		if ( ${"image{$i}Url"} === '' ) {
			continue;
		}
		?>
        <div class="col">
            <img src="<?= ${"image{$i}Url"} ?>" alt="<?= ${"image{$i}Alt"} ?> "/>
        </div>
	<?php endfor; ?>
</div>
