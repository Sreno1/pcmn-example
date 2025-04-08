<?php
add_action( 'wp_enqueue_scripts', 'pcmnnurture_enqueue_scripts' );
function pcmnnurture_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );

	// enqueue Bootstrap JS
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.1.3', true );

}

add_action( 'wp_enqueue_scripts', 'pcmnnurture_enqueue_styles' );
function pcmnnurture_enqueue_styles() {
	wp_enqueue_style( 'pcmnnurture-style', get_stylesheet_uri() );

	// enqueue Bootstrap CSS
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3' );

	// enqueue bootstrap icons css
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3' );

	// enqueue global css
	wp_enqueue_style( 'global-style', STYLESHEET_DIR_URI . '/src/css/global.css' );

	// enqueue typography css
	wp_enqueue_style( 'typography-style', STYLESHEET_DIR_URI . '/src/css/typography.css' );

	// enqueue color css
	wp_enqueue_style( 'color-style', STYLESHEET_DIR_URI . '/src/css/colors.css' );

	// enqueue button css
	wp_enqueue_style( 'button-style', STYLESHEET_DIR_URI . '/src/css/buttons.css' );

	// enqueue animation css
	wp_enqueue_style( 'animation-style', STYLESHEET_DIR_URI . '/src/css/animations.css' );

	// enqueue header css
	wp_enqueue_style( 'header-style', STYLESHEET_DIR_URI . '/src/css/templates/header.css' );

	// enqueue footer css
	wp_enqueue_style( 'footer-style', STYLESHEET_DIR_URI . '/src/css/templates/footer.css' );

}
