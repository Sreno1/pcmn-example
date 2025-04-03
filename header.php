<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php pcmnnurture_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <!-- import Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<?php
				if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
					echo '<h1>';
				}
				echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
				if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
					echo '</h1>';
				}
				?>
            </div>
            <div id="site-description"<?php if ( ! is_single() ) {
				echo ' itemprop="description"';
			} ?>><?php bloginfo( 'description' ); ?></div>
        </div>
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'link_before'    => '<span itemprop="name">',
				'link_after'     => '</span>'
			) ); ?>
        </nav>
    </header>
    <div id="container">
        <main id="content" role="main">