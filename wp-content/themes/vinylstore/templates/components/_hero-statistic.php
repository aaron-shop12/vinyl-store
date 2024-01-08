<section class="heroStatistic <?php the_sub_field( 'colour_tone' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'columns' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="inner">
            <span>
                <span><span><?php the_sub_field('percentage'); ?></span></span>
            </span>
            <span>
                <?php the_sub_field('text'); ?>
            </span>
            <span>
                <?php the_sub_field('secondary_text'); ?>
                <?php if(get_sub_field('source_url')) { ?>
                    <span class="source">
                        <a href="<?php the_sub_field('source_url'); ?>" target="_blank">Source ></a>
                    </span>
                <?php } ?>
            </span>
        </div>
    </div>
</section>    