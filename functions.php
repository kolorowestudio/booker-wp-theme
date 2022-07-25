<?php
/**
 * Twenty Twenty-Two Child functions
 *
 */


if ( ! function_exists( 'twentytwentytwochild_styles' ) ) :

	function twentytwentytwochild_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'child-style',
			get_template_directory_uri() . '/style.css',
			array('parenthandle'),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'child-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwochild_styles' );


add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}

// End of theme settings ================================================================================

// Featured video 

// add_action( 'admin_menu', 'misha_add_metabox' );
add_action( 'add_meta_boxes', 'is_featured_video' );
// or add_action( 'add_meta_boxes_{post_type}', 'misha_add_metabox' );

function is_featured_video() {

	add_meta_box(
		'featured_video', // metabox ID
		'Featured Video', // title
		'featured_video_callback', // callback function
		'post', // post type or post types in array
		'side', // position (normal, side, advanced)
		'default' // priority (default, low, high, core)
	);

}

// it is a callback function which actually displays the content of the meta box
function featured_video_callback( $post ) {

	$is_video_url = get_post_meta( $post->ID, 'is_video_url', true );

	// nonce, actually I think it is not necessary here
	//wp_nonce_field( 'somerandomstr', '_mishanonce' );

	echo '
	<div>
		<label for="myfile">Select a video file:</label>
		<input type="text" id="is_video_url" name="is_video_url" value="" >
		<p>Current: ' . esc_attr( $is_video_url ) . '</p>
	</div>';

}



add_action( 'save_post', 'featured_video_save', 10, 2 );
// or add_action( 'save_post_{post_type}', 'featured_video_save', 10, 2 );

function featured_video_save( $post_id, $post ) {

	// nonce check
	/*if ( ! isset( $_POST[ '_mishanonce' ] ) || ! wp_verify_nonce( $_POST[ '_mishanonce' ], 'somerandomstr' ) ) {
		return $post_id;
	}*/

	// check current user permissions
	$post_type = get_post_type_object( $post->post_type );

	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return $post_id;
	}

	// Do not save the data if autosave
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return $post_id;
	}

	// define your own post type here
	if( 'post' !== $post->post_type ) {
		return $post_id;
	}

	if( isset( $_POST[ 'is_video_url' ] ) ) {
		update_post_meta( $post_id, 'is_video_url',  $_POST[ 'is_video_url' ] );
	} else {
		delete_post_meta( $post_id, 'is_video_url' );
	}

	return $post_id;

}
