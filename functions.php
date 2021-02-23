<?php
/**
 *
 */
function spidermag_scripts() {
	// enqueue style
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'spidermag_scripts');

/**
 * @param string $which Which type to compare with. Possible values are: classicpost, screenwidthpost or standardpost
 *
 * @return string
 */
function spidermag_is_post_layout( $which = 'classicpost' ){
	global $post;
	$option = esc_attr( get_post_meta( $post->ID, 'spidermag_post_settings_layouts', true ) );
	return $option == $which;
}

/**
 * @return bool
 */
function spidermag_is_video_post(){
	return function_exists( 'cvwp_has_video' ) && cvwp_has_video();
}