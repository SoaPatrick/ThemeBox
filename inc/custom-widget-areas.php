<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package mch-group-one
 */

function themebox_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mch-group-one' ),
		'id'            => 'sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'themebox_widgets_init' );
