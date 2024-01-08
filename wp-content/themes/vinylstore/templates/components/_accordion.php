<section class="accordion <?php the_sub_field( 'colour_tone' ); ?> <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'layout' ); ?> <?php the_sub_field( 'background' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <div class="blog-accordion-container" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <?php if(get_sub_field('title')) { ?>
                <h3><?php the_sub_field('title'); ?></h3>
            <?php } ?>
            <?php if ( have_rows( 'items' ) ) : ?>
                <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                    <span class="accordion-content-container">
                        <?php if(get_sub_field('icon')) { ?><span class="icon"><img src="<?php the_sub_field('icon'); ?>" /></span><?php } ?>
                        <span class="accordion-title"><?php the_sub_field( 'question' ); ?></span>
                        <span class="accordion-content">
                            <?php the_sub_field( 'answer' ); ?>
                            <?php if ( have_rows( 'images' ) ) : ?>
                                <span class="images">
                                    <?php while ( have_rows( 'images' ) ) : the_row(); ?>
                                        <span class="column">
                                            <img src="<?php the_sub_field('image'); ?>" />
                                        </span>
                                    <?php endwhile; ?>
                                </span>    
                            <?php endif; ?>
                            <?php if ( have_rows( 'image_carousel' ) ) : ?>
                                <span class="imageCarousel">
                                    <div class="swiper">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            <?php while ( have_rows( 'image_carousel' ) ) : the_row(); ?>
                                                <?php $image = get_sub_field('image'); ?>
                                                <li class="swiper-slide">
                                                    <img src="<?php the_sub_field('image'); ?>" />
                                                </li>
                                            <?php endwhile; ?>
                                        </div>
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination"></div>
                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </span>
                            <?php endif; ?>
                            <?php if(get_sub_field('image_caption')) { ?>
                                <span class="imageCaption">
                                    <?php the_sub_field('image_caption'); ?>
                                </span>
                            <?php } ?>
                        </span>
                    </span>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>
