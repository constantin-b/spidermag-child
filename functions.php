<?php
/**
 *
 */
function spidermag_scripts() {
	// enqueue style
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'spidermag_scripts');