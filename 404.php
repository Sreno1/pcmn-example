<?php get_header(); ?>
<article id="post-0" class="post not-found masthead container">
	<header class="header">
		<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'pcmnnurture' ); ?></h1>
	</header>
	<div class="entry-content" itemprop="mainContentOfPage">
		<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'pcmnnurture' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</article>
<?php get_footer(); ?>
