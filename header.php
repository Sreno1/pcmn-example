<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php pcmnnurture_schema_type(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner"
			class="d-flex flex-wrap position-absolute w-100 justify-content-between pt-4 mb-4">
		<nav id="menu" role="navigation" class="container navbar navbar-expand-lg w-75 mx-auto" itemscope
			 itemtype="https://schema.org/SiteNavigationElement">
			<div class="container-fluid">
				<div id="branding" class="navbar-brand me-auto">
					<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
						<?php
						// check to see if the logo exists and add it to the page
						if ( function_exists( 'the_custom_logo' ) ) :
							the_custom_logo();
						// add a fallback if the logo doesn't exist
						else :
							echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a></h1>';
							?>
							<div id="site-description"<?php if ( ! is_single() ) {
								echo ' itemprop="description"';
							} ?>><?php bloginfo( 'description' ); ?></div>
						<?php
						endif;
						?>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
					<i class="bi bi-list"></i>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<?php wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'walker'         => new Custom_Header_Walker_Menu(),
						'link_before'    => '<span itemprop="name">',
						'link_after'     => '</span>',
						'menu_class'     => 'nav nav-pills navbar-nav me-auto mb-2 mb-lg-0',
					) ); ?>
				</div>
			</div>
		</nav>
	</header>
	<div id="container">
		<main id="content" role="main">
