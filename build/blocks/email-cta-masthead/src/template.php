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
                <div class="col">
                    <h2><?= $headingStart ?><br/><span
                                style="color: var(--pcm-pink)"><?= $pinkText ?></span><br/><?= $headingEnd ?>
                    </h2>
                    <p><?= $contentText ?></p>
                    <div class="email-cta-masthead__form">
                        <input type="text" placeholder="<?= $inputText ?>"/>
                        <br/>
                        <button class="solid-pill mt-3 py-3"><?= $buttonText ?></button>
                    </div>
                </div>
                <div class="col imgCol">
                    <img src="<?= esc_url( $imageUrl ) ?>" alt="<?= esc_attr( $imageAlt ) ?>"
                         class="email-cta-masthead__image"/>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee py-2">
        <div><?= $marqueeText ?></div>
    </div>
</div>
