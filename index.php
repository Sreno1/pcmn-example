<?php
get_header();
?>
	<div class="masthead container">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/entry' );
			comments_template();
		endwhile; endif;
		get_template_part( 'template-parts/nav', 'below' );
		?>
	</div>
<?php
get_footer();
