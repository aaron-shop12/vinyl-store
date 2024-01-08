<section class="full-width-image <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <?php $hero_image = get_sub_field( 'image' ); ?>
        <div class="hero-image-container" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <span class="image-container">
                <span class="bg-container">
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
                </span>
            </span>
        </div>
    </div>
</section>
