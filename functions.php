<?php

// define global variables
define('TEMPLATE_DIR_URL', get_template_directory());
define('STYLESHEET_DIR_URI', get_template_directory_uri());

// add logo support
add_theme_support( 'custom-logo' );

// require custom header menu
require_once TEMPLATE_DIR_URL . '/inc/custom_header_menu.php';

// require enqueue scripts
require_once TEMPLATE_DIR_URL . '/inc/enqueues.php';

add_action('after_setup_theme', 'pcmnnurture_setup');
function pcmnnurture_setup()
{
	load_theme_textdomain('pcmnnurture', TEMPLATE_DIR_URL . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('appearance-tools');
    add_theme_support('woocommerce');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'pcmnnurture')));
}

add_action('wp_footer', 'pcmnnurture_footer');
function pcmnnurture_footer()
{
    ?>
    <script>
        jQuery(document).ready(function ($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (deviceAgent.match(/(Android)/)) {
                $("html").addClass("android");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
    <?php
}

add_filter('document_title_separator', 'pcmnnurture_document_title_separator');
function pcmnnurture_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}

add_filter('the_title', 'pcmnnurture_title');
function pcmnnurture_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}

function pcmnnurture_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}

add_filter('nav_menu_link_attributes', 'pcmnnurture_schema_url', 10);
function pcmnnurture_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}

if (!function_exists('pcmnnurture_wp_body_open')) {
    function pcmnnurture_wp_body_open()
    {
        do_action('wp_body_open');
    }
}
add_action('wp_body_open', 'pcmnnurture_skip_link', 5);
function pcmnnurture_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'pcmnnurture') . '</a>';
}

add_filter('the_content_more_link', 'pcmnnurture_read_more_link');
function pcmnnurture_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'pcmnnurture'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('excerpt_more', 'pcmnnurture_excerpt_read_more_link');
function pcmnnurture_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'pcmnnurture'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes_advanced', 'pcmnnurture_image_insert_override');
function pcmnnurture_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}

add_action('widgets_init', 'pcmnnurture_widgets_init');
function pcmnnurture_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'pcmnnurture'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('wp_head', 'pcmnnurture_pingback_header');
function pcmnnurture_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
		return $data;
	}

	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4 );

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// add bootstrap classes to custom logo
add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

	$html = str_replace( 'custom-logo', 'me-2 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none', $html );

	return $html;
}