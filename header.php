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
    <header id="header" role="banner" class="d-flex flex-wrap justify-content-around py-4 mb-4">
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<?php
                    // check to see if the logo exists and add it to the page
                    if ( function_exists('the_custom_logo') ) :
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
        <nav id="menu" role="navigation" class="navbar navbar-expand-lg" itemscope itemtype="https://schema.org/SiteNavigationElement">
		    <?php wp_nav_menu( array(
			    'theme_location' => 'main-menu',
			    'walker'         => new Custom_Header_Walker_Menu(),
			    'link_before'    => '<span itemprop="name">',
			    'link_after'     => '</span>',
                'menu_class' => 'nav nav-pills',
		    ) ); ?>
        </nav>
    </header>
    <div id="container">
        <main id="content" role="main">