<?php
/**
 * @author  CodeFlavors
 * @project videographywp-pro
 */

/**
 * @var array $args Array of arguments passed to the template.
 */

// enable lazy load by default
add_filter( 'cvwp_lazy_load', '__return_true' );
// embed the video
cvwp_embed_video( sprintf( '<div class="thumb-box %s">', $args['class'] ), '</div>' );
?>
<div class="stanterpost-single-post">
	<h3> <?php the_title(); ?></h3>
	<div class="text-danger sub-info-bordered">
		<?php spidermag_single_post_meta(); ?>
	</div>
</div>
