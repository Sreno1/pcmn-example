<?php

// register blocks

function register_blocks() {
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/email-cta-masthead/src/block.json' );
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/image-card/src/block.json' );
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/media-upload-ref/src/block.json' );
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/logo-marquee/src/block.json' );
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/fullwidth-cta/src/block.json' );
	register_block_type( TEMPLATE_DIR_URL . '/build/blocks/three-testimonials/src/block.json' );
}

add_action( 'init', 'register_blocks' );
