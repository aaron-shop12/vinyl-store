<section class="image-parallax-module <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="background-image-container">
        <div class="container no-padding-container">
            <div class="background-parallax">
                <div class="bg-container">
                    <?php $image = get_sub_field( 'image' ); ?>
        			<?php if ( $image ) { ?>
        				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        			<?php } ?>
                </div>
            </div>
            <span class="opacity-overlay"></span>
        </div>
    </div>
    <div class="parallax-content-container">
        <div class="container">
            <div class="content-container-left">
                <div class="top-content-container">
                    <h2 class="white-text"><?php the_sub_field( 'title' ); ?></h2>
                    <span class="sub-title yellow-text svg-before"><?php the_sub_field( 'sub_title' ); ?></span>
                    <?php if ( get_sub_field( 'second_sub_title' )) { ?>
                        <span class="sub-title yellow-text svg-before"><?php the_sub_field( 'second_sub_title' ); ?></span>
                    <?php } ?>
                </div>
                <div class="bottom-content-container desktop">
                    <span class="text-container"><?php the_sub_field( 'text' ); ?></span>
        			<?php if ( have_rows( 'link' ) ) : ?>
                        <span class="text-link-container">
            				<?php while ( have_rows( 'link' ) ) : the_row(); ?>
            					<a class="text-link yellow-text-link" href="<?php the_sub_field( 'link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
            				<?php endwhile; ?>
                        </span>
        			<?php else : ?>
        				<?php // no rows found ?>
        			<?php endif; ?>
                </div>
            </div>
            <?php if ( have_rows( 'team_icons' ) ) : ?>
                <?php $iconCounter = 1; ?>
                <div class="icons-container-right">
    				<?php while ( have_rows( 'team_icons' ) ) : the_row(); ?>
                        <?php if($iconCounter == 1 || $iconCounter == 3 || $iconCounter == 5 || $iconCounter == 7 ){ ?>
                            <div class="icon-column one-quarter">
                        <?php } ?>
                        <span class="icon-container">
                            <?php if (get_sub_field( 'link' )) { ?>
                                <a href="<?php the_sub_field( 'link' ); ?>" target="_self">
                            <?php } ?>
                            <span class="icon-image">
                                <span class="bg-container">
                					<?php $icon = get_sub_field( 'icon' ); ?>
                					<?php if ( $icon ) { ?>
                						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                					<?php } ?>
                                </span>
                            </span>
                            <?php if (get_sub_field( 'link' )) { ?>
                                </a>
                            <?php } ?>
                        </span>

                        <?php if($iconCounter == 2 || $iconCounter == 4 || $iconCounter == 6 || $iconCounter == 8){ ?>
                            </div>
                        <?php } ?>
                        <?php $iconCounter++; ?>
    				<?php endwhile; ?>
                </div>
                <div class="bottom-content-container mobile">
                    <span class="text-container"><?php the_sub_field( 'text' ); ?></span>
        			<?php if ( have_rows( 'link' ) ) : ?>
                        <span class="text-link-container">
            				<?php while ( have_rows( 'link' ) ) : the_row(); ?>
            					<a class="text-link yellow-text-link" href="<?php the_sub_field( 'link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
            				<?php endwhile; ?>
                        </span>
        			<?php else : ?>
        				<?php // no rows found ?>
        			<?php endif; ?>
                </div>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
        </div>
    </div>
</section>
