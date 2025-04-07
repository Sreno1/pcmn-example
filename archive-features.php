<?php

/*
 * Template Name: Features Archive
 */

get_header();
?>
	<header class="masthead container header">
		<h1 class="entry-title" itemprop="name"><?php the_archive_title(); ?></h1>
		<div class="archive-meta" itemprop="description"><?php if ( '' != get_the_archive_description() ) {
				echo get_the_archive_description();
			} ?></div>
	</header>
<?php
// display features in a bootstrap grid, including title, featured image, description and note meta

if ( have_posts() ) : ?>
	<div class="container archive-features">
		<?php
		if ( have_posts() ) : ?>
			<div class="container archive-features">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gx-3">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col mb-4">
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
										<small
											class="text-muted"><?php echo get_post_meta( get_the_ID(), '_features_note', true ); ?></small>
									</p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php
		else :
			echo '<p>No features found</p>';
		endif;
		?>
	</div>
<?php
else :
	echo '<p>No features found</p>';
endif;

get_footer();
