<?php
/**
 * Enqueue theme styling
 */
function spidermag_theme_enqueue_styles() {

	$parenthandle = 'parent-style';
	$theme = wp_get_theme();
	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
		array(
			'bootstrap',
			'font-awesome',
			'ionicons',
			'animate'
		),
		$theme->parent()->get('Version')
	);

	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'spidermag_theme_enqueue_styles' );

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