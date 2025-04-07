<?php
$avatar_id = absint( $attributes['avatarId'] );

// Output the image.
if ( $avatar_id ) {
	echo wp_get_attachment_image( $avatar_id, 'full' );
}
