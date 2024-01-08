<section class="two-column-video-text">
    <div class="container">
        <div class="column-container">
            <div class="text-column column <?php the_sub_field( 'image_column' ); ?>" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <?php if ( have_rows( 'text_column' ) ) : ?>
    				<?php while ( have_rows( 'text_column' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'sub_title' )) { ?>
                            <h4><?php the_sub_field( 'sub_title' ); ?></h4>
                        <?php } ?>
            			<span class="text"><?php the_sub_field( 'text' ); ?></span>
                        <?php if ( have_rows( 'button' ) ) : ?>
                            <span class="button-container">
        						<?php while ( have_rows( 'button' ) ) : the_row(); ?>
        							<a class="std-button black-outline-button" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
        						<?php endwhile; ?>
                            </span>
    					<?php else : ?>
    						<?php // no rows found ?>
    					<?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </div>
            <div class="column image-column <?php the_sub_field( 'image_column' ); ?>" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <div class="video-outer">
        			<div class="video-container">
        				<?php $video_poster_image = get_sub_field( 'image' ); ?>
        				<a class="popup-video" href="<?php the_sub_field( 'video_url' ); ?>">
        					<span class="video-wrapper">
        			            <img class="video-poster" src="<?php echo $video_poster_image['url']; ?>"/>
        						<span class="video-button"></span>
        			        </span>
        				</a>
        			</div>
        		</div>
                <?php if ( get_sub_field( 'caption' )) { ?>
                    <span class="caption"><?php the_sub_field( 'caption' ); ?></span>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
