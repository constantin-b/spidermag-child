<?php
	$image_popup_id  = get_post_thumbnail_id();
	$image_popup_url = wp_get_attachment_url( $image_popup_id );
?>
<div class="col-sm-16 classicpost">
	<?php if ( get_theme_mod('spidermag_featured_image_popup', 0 ) == 1 ) { ?>
		<a class="popup-img" href="<?php echo esc_url( $image_popup_url ); ?>">
			<div class="thumb-box"><span class="<?php spidermag_get_spider_mag_post_format_icon( get_post_format() ); ?>"></span>
				<?php
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'spidermag-featured-image', true );
				?>
				<img class="img-responsive" src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
			</div>
		</a>
	<?php } else { ?>
		<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'spidermag-featured-image', true );
		?>
		<a href="javascript:void(0)">
			<div class="thumb-box"><span class="<?php spidermag_get_spider_mag_post_format_icon( get_post_format() ); ?>"></span>
				<img class="img-responsive" src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
			</div>
		</a>
	<?php } ?>
	<div class="stanterpost-single-post">
		<h3> <?php the_title(); ?></h3>
		<div class="text-danger sub-info-bordered">
			<?php spidermag_single_post_meta(); ?>
		</div>
	</div>
</div>