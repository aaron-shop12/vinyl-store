<section class="banner-block">
    <div class="banner-top">
        <div class="container">
            <div class="skew-container">
                <div class="image-container">
                    <div class="bg-container">
                        <?php if (get_sub_field( 'image_or_video' ) == 'image') { ?>
                            <?php $image = get_sub_field( 'image' ); ?>
                			<?php if ( $image ) { ?>
                				<img class="banner-image desktop" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                			<?php } ?>
                            <?php $image_mobile = get_sub_field( 'image_mobile' ); ?>
                			<?php if ( $image_mobile ) { ?>
                				<img class="banner-image mobile" src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>" />
                			<?php } ?>
                        <?php } ?>
                        <?php if (get_sub_field( 'image_or_video' ) == 'video') { ?>
                            <video class="video" id="video" playsinline="" loop="" webkit-playsinline="" preload="" muted="" autoplay="">
    							<source src="<?php the_sub_field( 'mp4_looped_video' ); ?>" type="video/mp4"></source>
    						</video>
                        <?php } ?>
                    </div>
                    <?php $logo = get_sub_field( 'logo' ); ?>
        			<?php if ( $logo ) { ?>
                        <div class="logo-container <?php the_sub_field( 'logo_orientation' ); ?>">
    		                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        </div>
        			<?php } ?>

                    <div class="v-wrap">
                        <div class="v-box">
                            <div class="title-container">
                                <?php if(get_sub_field( 'title' )){ ?>
                                    <span class="title <?php the_sub_field( 'text_colour' ); ?>"><?php the_sub_field( 'title' ); ?></span>
                                    <?php if ( have_rows( 'button' ) ) : ?>
                                        <span class="button-container">
                                            <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                                <?php if (get_sub_field( 'video_or_link' ) == 'video') { ?>
                                                    <a class="std-button popup-video <?php the_sub_field( 'button_style' ); ?>" href="<?php the_sub_field( 'video_url' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                                <?php } else { ?>
                                                    <a class="std-button <?php the_sub_field( 'button_style' ); ?>" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                                <?php } ?>
                                            <?php endwhile; ?>
                                        </span>
                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>
                                <?php } else { ?>
                                    <?php if ( have_rows( 'button' ) ) : ?>
                                        <span class="button-container no-title">
                                            <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                                <?php if (get_sub_field( 'video_or_link' ) == 'video') { ?>
                                                    <a class="std-button popup-video <?php the_sub_field( 'button_style' ); ?>" href="<?php the_sub_field( 'video_url' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                                <?php } else { ?>
                                                    <a class="std-button <?php the_sub_field( 'button_style' ); ?>" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                                <?php } ?>
                                            <?php endwhile; ?>
                                        </span>
                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</section>
