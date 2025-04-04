<?php

// Custom Header Menu Walker
class Custom_Header_Walker_Menu extends Walker_Nav_Menu {
	// Start Level
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
	}

    // Start Element
	// Start Element
	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent      = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$li_classes = [];
		// Add 'dropdown' bootstrap class if the item has children
		if (in_array('menu-item-has-children', $classes)) {
			$li_classes[] = 'dropdown';
		}
		// check if there are no custom classes including 'pill'
		if ( ! in_array( 'solid-pill', $classes ) && ! in_array( 'stroke-pill', $classes ) ) {
			$classes[] .= 'no-pill';
			$li_class = $depth === 0 ? 'hover-underline-animation menu-item-container ' : 'hover-sideline-animation menu-item-container submenu-item-container ';
		} else {
			$li_class = 'menu-item-container';
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? esc_attr( $class_names ) : '';

		$li_class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $li_classes ), $item, $args, $depth ) );
		$li_class_names = $li_class_names ?  esc_attr( $li_class_names ) : '';

		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes  .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes  .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes  .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$output      .= $indent . '<li id="menu-item-'. $item->ID . '" class="' . $li_class . $li_class_names . '">';
		$item_output = $args->before;
		// Add dropdown toggle button if the item has children
		if (in_array('menu-item-has-children', $classes)) {
			$item_output .= '<a class="dropdown-toggle ' . $class_names . '" role="button" data-bs-toggle="dropdown" aria-expanded="false" ' . $attributes . '>';
			$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= '</a>';
		} else {
			$item_output .= '<a class="' . $class_names . '"' . $attributes . '>';
			$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= '</a>';
		}
		$item_output .= $args->after;
		$output      .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	// End Element
	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= "</li>\n";
	}

	// End Level
	function end_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}
}

?>
