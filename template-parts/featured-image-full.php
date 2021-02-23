<?php
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'spidermag-screenwidthpost-image', true );
?>
<div class="standardpost" style="background-image:url('<?php echo esc_url( $image[0] ); ?>');">
	<div class="stanterpost-single-post">
		<h3> <?php the_title(); ?></h3>
		<div class="text-danger sub-info-bordered">
			<?php spidermag_single_post_meta(); ?>
		</div>
	</div> <!-- /stanterpost-single-post -->
</div><!---/ standard -->