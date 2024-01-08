<section class="cta-module <?php the_sub_field( 'module_type' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="cta-inner <?php the_sub_field( 'module_type' ); ?>" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <div class="cta-container" >
                <div class="top-row">
                    <div class="cta-column title-column">
                        <h3 class="white-text"><?php the_sub_field( 'title' ); ?></h3>
                    </div>
                </div>
                <div class="bottom-row">
                    <?php if (get_sub_field( 'sub_title' )) { ?>
                        <div class="cta-column title-column">
                            <span class="sub-title yellow-text svg-before"><?php the_sub_field( 'sub_title' ); ?></span>
                        </div>
                    <?php } ?>
                    <div class="cta-column text-column button-column">
                        <?php if (get_sub_field( 'text' )) { ?>
                            <span class="text"><?php the_sub_field( 'text' ); ?></span>
                        <?php } ?>
                        <?php if ( have_rows( 'button' ) ) : ?>
                            <span class="button-container">
                                <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                    <a class="std-button" href="<?php the_sub_field( 'button_link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                <?php endwhile; ?>
                            </span>
            			<?php else : ?>
            				<?php // no rows found ?>
            			<?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
