<?php get_header(); ?>
<div class="masthead container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php
		// check if the post type is 'feature'
		if ( 'features' == get_post_type() ) {
			// get the feature post template
			get_template_part( 'template-parts/features/entry' );
		} else {
			// get the default post template
			get_template_part( 'template-parts/entry' );
		}
		if ( comments_open() && ! post_password_required() ) {
			comments_template( '', true );
		} ?>
	<?php endwhile; endif; ?>
	<footer class="footer">
		<?php get_template_part( 'template-parts/nav', 'below-single' ); ?>
	</footer>
</div>
<?php get_footer(); ?>
