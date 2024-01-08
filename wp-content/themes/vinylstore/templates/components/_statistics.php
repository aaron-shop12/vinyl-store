<section class="statistics <?php the_sub_field( 'colour_tone' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'columns' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="column-container">
            <?php if ( have_rows( 'items' ) ) : ?>
                <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                    <span class="item">
                        <span><?php the_sub_field('percentage'); ?></span>
                        <span><?php the_sub_field('text'); ?></span>
                    </span>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>