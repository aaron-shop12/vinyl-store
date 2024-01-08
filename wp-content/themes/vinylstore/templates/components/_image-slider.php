<section class="full-width-image slider <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php while ( have_rows( 'images' ) ) : the_row(); ?>
                    <?php $image = get_sub_field('image'); ?>
                    <li class="swiper-slide">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </li>
                <?php endwhile; ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
