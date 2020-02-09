<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package themebox
 */

function themebox_scripts() {
	wp_enqueue_style( 'themebox-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themebox_scripts' );


/**
 * Deregister Embed script
 */
function themebox_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'themebox_deregister_scripts' );
