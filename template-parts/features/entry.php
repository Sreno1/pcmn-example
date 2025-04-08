<article id="post-<?php the_ID(); ?>" <?php post_class( 'col mb-4' ); ?>>
	<div class="card h-100 card-shadow card-rounded">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" class="card-img-contain"
			   title="<?php the_title_attribute(); ?>">
				<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"
					 alt="<?php the_title(); ?>">
			</a>
		<?php endif; ?>
		<div class="card-body">
			<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h5>
			<p class="card-text"><?php echo get_post_meta( get_the_ID(), '_features_description', true ); ?></p>
			<p class="card-text">
				<small class="text-muted"><?php echo get_post_meta( get_the_ID(), '_features_note', true ); ?></small>
			</p>
		</div>
	</div>
</article>
