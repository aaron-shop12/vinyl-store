<section class="two-column-image-text <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'container_width' ); ?> <?php the_sub_field( 'layout' ); ?> <?php the_sub_field( 'background_layout' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="column-container">
            <div class="text-column column <?php the_sub_field( 'layout' ); ?>">
                <span class="text"><?php the_sub_field( 'text' ); ?></span>
                <?php if(get_sub_field('tagline')) { ?>
                    <span class="tagline <?php the_sub_field( 'colour_scheme' ); ?>"><span><?php the_sub_field('tagline'); ?></span></span>
                <?php } ?>
                <?php if ( have_rows( 'buttons' ) ) : ?>
                    <span class="baseBtn">
                        <?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
                            <span>
                                <a href="<?php the_sub_field('url'); ?>" class="stdBtn" target="<?php the_sub_field('target'); ?>"><?php the_sub_field('title'); ?></a>
                            </span>
                        <?php endwhile; ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="column image-column <?php the_sub_field( 'layout' ); ?> <?php the_sub_field( 'image_scale' ); ?>">
                <div class="image-container">
                    <div class="bg-container">
                        <?php $image = get_sub_field( 'image' ); ?>
                		<?php if ( $image ) { ?>
                			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                		<?php } ?>
                    </div>
                </div>
                <?php if ( get_sub_field( 'caption' )) { ?>
                    <span class="caption"><?php the_sub_field( 'caption' ); ?></span>
                <?php } ?>
            </div>
        </div>
        <span class="eclipse"></span>
    </div>
</section>
