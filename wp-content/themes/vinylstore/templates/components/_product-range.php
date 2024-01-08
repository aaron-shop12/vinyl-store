<section class="productRange <?php the_sub_field( 'columns' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="outer">
            <?php if ( have_rows( 'items' ) ) : ?>
                <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                    <a class="product" href="<?php the_sub_field('button_url'); ?>">
                        <?php $hero_image = get_sub_field( 'image' ); ?>
                        <span class="image">
                            <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
                        </span>
                        <span class="text">
                            <?php the_sub_field('text'); ?>
                            <span class="btnBlock">
                                <span class="stdBtn">Learn more</a>
                            </span>
                        </span>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>    
    </div>
</section>    