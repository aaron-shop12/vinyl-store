<section class="video-module flexible-video-module <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
	<div class="container">
		<div class="video-outer" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
			<div class="video-container">
				<?php $video_poster_image = get_sub_field( 'video_poster_image' ); ?>
				<a class="popup-video" href="<?php the_sub_field( 'video_url' ); ?>">
					<span class="video-wrapper">
			            <img class="video-poster" src="<?php echo $video_poster_image['url']; ?>"/>
						<span class="video-button"></span>
			        </span>
				</a>
			</div>
			<?php if ( get_sub_field( 'caption' )) { ?>
				<span class="caption"><?php the_sub_field( 'caption' ); ?></span>
			<?php } ?>
		</div>
	</div>
</section>
