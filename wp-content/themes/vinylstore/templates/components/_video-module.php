<section class="video-module <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
	<div class="container">
		<div class="video-outer">
			<div class="video-container">
				<?php $video_poster_image = get_sub_field( 'video_poster_image' ); ?>
				<a class="popup-video" href="<?php the_sub_field( 'video_url' ); ?>">
					<span class="video-wrapper">
			            <img class="video-poster" src="<?php echo $video_poster_image['url']; ?>"/>
						<span class="video-button"></span>
			        </span>
				</a>
			</div>
		</div>
		<?php if ( have_rows( 'sign_up_overlay' ) ) : ?>
			<span class="signup-outer" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
				<span class="signup-module">
					<?php while ( have_rows( 'sign_up_overlay' ) ) : the_row(); ?>
						<span class="signup-content">
							<h3 class="white-text"><?php the_sub_field( 'title' ); ?></h3>
							<span class="signup-text"><?php the_sub_field( 'text' ); ?></span>
							<?php if ( have_rows( 'button' ) ) : ?>
	                            <span class="button-container">
	        						<?php while ( have_rows( 'button' ) ) : the_row(); ?>
	        							<a class="std-button yellow-outline-button" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
	        						<?php endwhile; ?>
	                            </span>
	    					<?php else : ?>
	    						<?php // no rows found ?>
	    					<?php endif; ?>
						</span>
					<?php endwhile; ?>
				</span>
			</span>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</section>
