<article id="post-<?php the_ID(); ?>" <?php post_class( 'col mb-4' ); ?>>
	<div onclick="location.href='<?php the_permalink(); ?>'"
		 class="h-100 <?php if ( ! is_single() ) { ?> card card-shadow card-rounded card-hover  <?php } ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<img class="<?php if ( ! is_single() ) { ?> card-img-top card-img-contain" <?php } ?>"
			src="<?php the_post_thumbnail_url(); ?>"
			alt="<?php the_title(); ?>">
		<?php endif; ?>
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?>
			</h5>
			<p class="card-text"><?php echo get_post_meta( get_the_ID(), '_features_description', true ); ?></p>
			<p class="card-text">
				<small
					class="text-muted"><?php echo get_post_meta( get_the_ID(), '_features_note', true ); ?></small>
			</p>
		</div>
	</div>
</article>
