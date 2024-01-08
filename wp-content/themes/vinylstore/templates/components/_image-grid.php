<section class="full-width-image grid <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="images">
            <?php while ( have_rows( 'images' ) ) : the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <a href="<?php echo $image['url']; ?>" data-gallery="gallery1" class="glightbox">
                    <span class="image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </span>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>
