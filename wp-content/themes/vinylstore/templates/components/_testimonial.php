<section class="testimonial <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'layout' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <span class="bgImage">
        <?php if(get_sub_field('background_image')) { ?>
            <img src="<?php the_sub_field('background_image'); ?>" />
        <?php } ?>
    </span>
    <div class="container indent">
        <div class="columns">
            <div class="column">
                <span class="image">
                    <img src="<?php the_sub_field('image'); ?>" />
                </span>
            </div>
            <div class="column">
                <?php the_sub_field('text'); ?>
                <span class="credits">
                    <h3 class="name"><?php the_sub_field('name'); ?></h3>
                    <h4 class="position"><?php the_sub_field('position'); ?></h4>
                    <h5 class="company"><?php the_sub_field('company'); ?></h5>
                    <span class="btnBlock">
                        <a href="<?php the_sub_field('button_url') ?>" class="stdBtn"><?php the_sub_field('button_title') ?></a>
                    </span>
                </span>
            </div>
        </div>
    </div>
</section>    