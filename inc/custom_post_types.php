<?php

// add features post type
// Register Custom Post Type Features
function pcmn_register_features_post_type() {
	$labels = array(
		'name'                  => _x( 'Features', 'Post Type General Name', 'pcmnnurture' ),
		'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'pcmnnurture' ),
		'menu_name'             => __( 'Features', 'pcmnnurture' ),
		'name_admin_bar'        => __( 'Feature', 'pcmnnurture' ),
		'archives'              => __( 'Feature Archives', 'pcmnnurture' ),
		'attributes'            => __( 'Feature Attributes', 'pcmnnurture' ),
		'parent_item_colon'     => __( 'Parent Feature:', 'pcmnnurture' ),
		'all_items'             => __( 'All Features', 'pcmnnurture' ),
		'add_new_item'          => __( 'Add New Feature', 'pcmnnurture' ),
		'add_new'               => __( 'Add New', 'pcmnnurture' ),
		'new_item'              => __( 'New Feature', 'pcmnnurture' ),
		'edit_item'             => __( 'Edit Feature', 'pcmnnurture' ),
		'update_item'           => __( 'Update Feature', 'pcmnnurture' ),
		'view_item'             => __( 'View Feature', 'pcmnnurture' ),
		'view_items'            => __( 'View Features', 'pcmnnurture' ),
		'search_items'          => __( 'Search Feature', 'pcmnnurture' ),
		'not_found'             => __( 'Not found', 'pcmnnurture' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'pcmnnurture' ),
		'featured_image'        => __( 'Featured Image', 'pcmnnurture' ),
		'set_featured_image'    => __( 'Set featured image', 'pcmnnurture' ),
		'remove_featured_image' => __( 'Remove featured image', 'pcmnnurture' ),
		'use_featured_image'    => __( 'Use as featured image', 'pcmnnurture' ),
		'insert_into_item'      => __( 'Insert into feature', 'pcmnnurture' ),
		'uploaded_to_this_item' => __( 'Uploaded to this feature', 'pcmnnurture' ),
		'items_list'            => __( 'Features list', 'pcmnnurture' ),
		'items_list_navigation' => __( 'Features list navigation', 'pcmnnurture' ),
		'filter_items_list'     => __( 'Filter features list', 'pcmnnurture' ),
	);
	$args   = array(
		'label'               => __( 'Feature', 'pcmnnurture' ),
		'description'         => __( 'These are the features provided by PCM Nurture.', 'pcmnnurture' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'features', $args );
}

add_action( 'init', 'pcmn_register_features_post_type', 0 );

// Add custom metaboxes for Features post type
function pcmn_add_features_metaboxes() {
	add_meta_box(
		'features_description',
		__( 'Description', 'pcmnnurture' ),
		'pcmn_features_description_callback',
		'features',
		'normal',
		'high'
	);
	add_meta_box(
		'features_note',
		__( 'Note', 'pcmnnurture' ),
		'pcmn_features_note_callback',
		'features',
		'normal',
		'high'
	);
}

add_action( 'add_meta_boxes', 'pcmn_add_features_metaboxes' );

function pcmn_features_description_callback( $post ) {
	wp_nonce_field( 'pcmn_save_features_description', 'pcmn_features_description_nonce' );
	$value = get_post_meta( $post->ID, '_features_description', true );
	echo '<textarea style="width:100%" id="features_description" name="features_description">' . esc_textarea( $value ) . '</textarea>';
}

function pcmn_features_note_callback( $post ) {
	wp_nonce_field( 'pcmn_save_features_note', 'pcmn_features_note_nonce' );
	$value = get_post_meta( $post->ID, '_features_note', true );
	echo '<textarea style="width:100%" id="features_note" name="features_note">' . esc_textarea( $value ) . '</textarea>';
}

function pcmn_save_features_metaboxes( $post_id ) {
	if ( ! isset( $_POST['pcmn_features_description_nonce'] ) || ! wp_verify_nonce( $_POST['pcmn_features_description_nonce'], 'pcmn_save_features_description' ) ) {
		return;
	}
	if ( ! isset( $_POST['pcmn_features_note_nonce'] ) || ! wp_verify_nonce( $_POST['pcmn_features_note_nonce'], 'pcmn_save_features_note' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	if ( isset( $_POST['features_description'] ) ) {
		update_post_meta( $post_id, '_features_description', sanitize_text_field( $_POST['features_description'] ) );
	}
	if ( isset( $_POST['features_note'] ) ) {
		update_post_meta( $post_id, '_features_note', sanitize_text_field( $_POST['features_note'] ) );
	}
}

add_action( 'save_post', 'pcmn_save_features_metaboxes' );

// Filter to change the features post type archive title
function pcmnnurture_features_archive_title( $title ) {
	if ( is_post_type_archive( 'features' ) ) {
		$title = __( 'Our Features', 'pcmnnurture' );
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'pcmnnurture_features_archive_title' );
