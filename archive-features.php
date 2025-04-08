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
	<div class="container archive-features">
		<div class="container archive-features">
			<?php
			if ( have_posts() ) : ?>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gx-3">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/features/entry' ); ?>
					<?php endwhile; ?>
				</div>
			<?php
			else :
				echo '<p>No features found</p>';
			endif;

			?>
		</div>
	</div>
<?php
get_footer();
