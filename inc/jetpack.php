<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package underscores_assignment4-2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function underscores_assignment4_2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'underscores_assignment4_2_jetpack_setup' );
