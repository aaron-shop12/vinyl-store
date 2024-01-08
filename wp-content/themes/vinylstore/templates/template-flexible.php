<?php
/**
 * Template Name: Flexible Template
 */

get_header();
?>
<main class="page flexible <?php the_field('colour_scheme'); ?>" id="main">
    <?php if ( have_rows( 'banner' ) ) : ?>
        <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
            <section class="banner <?php the_sub_field('banner_size'); ?> <?php the_sub_field('colour_scheme'); ?>">
                <?php while ( have_rows( 'slides' ) ) : the_row(); ?>
                    <?php 
                        $image = get_sub_field('image');
                        $vimeoLink = get_sub_field('vimeo_link');
                    ?>
                    <span class="image">
                        <?php if($vimeoLink) { ?>
                            <video muted loop autoplay playsinline>
                                <source src="<?php echo $vimeoLink; ?>" type="video/mp4">
                            </video>
                        <?php } else { ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>
                        <span class="overlay">
                            <div class="container">
                                <?php if(get_sub_field('text')) { ?>
                                    <span class="<?php the_sub_field('text_position'); ?><?php if($vimeoLink) { ?> base<?php } ?>">
                                        <span>
                                            <h1><?php the_sub_field('text'); ?></h1>
                                            <?php if(get_sub_field('secondary_text')) { ?>
                                                <p><?php the_sub_field('secondary_text'); ?></p>
                                            <?php } ?>
                                            <?php if ( have_rows( 'button' ) ) : ?>
                                                <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                                    <span class="btnBlock">
                                                        <a href="<?php the_sub_field('url'); ?>" class="stdBtn" target="<?php the_sub_field('target'); ?>"><?php the_sub_field('text'); ?></a>
                                                    </span>
                                                <?php endwhile; ?>
                                            <?php endif; ?>    
                                        </span>    
                                    </span>
                                <?php } ?>
                            </div>    
                        </span>
                    </span>
                <?php endwhile; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if ( have_rows( 'blocks' ) ): ?>
    	<?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
            <?php if ( get_row_layout() == 'full_width_image' ) : ?>
                <?php get_template_part( 'templates/components/_full-width-image' ); ?>
            <?php elseif  ( get_row_layout() == 'full_width_text' ) : ?>
                <?php get_template_part( 'templates/components/_full-width-text' ); ?>
            <?php elseif  ( get_row_layout() == 'image_slider' ) : ?>
                <?php get_template_part( 'templates/components/_image-slider' ); ?>
            <?php elseif  ( get_row_layout() == 'image_grid' ) : ?>
                <?php get_template_part( 'templates/components/_image-grid' ); ?>
            <?php elseif  ( get_row_layout() == 'properties_listing' ) : ?>
                <?php get_template_part( 'templates/components/_properties-listing' ); ?>
		    <?php elseif  ( get_row_layout() == 'two_column_text' ) : ?>
                <?php get_template_part( 'templates/components/_two-column-module' ); ?>
            <?php elseif ( get_row_layout() == 'video_module' ) : ?>
                <?php get_template_part( 'templates/components/_flexible_video-module' ); ?>
            <?php elseif ( get_row_layout() == 'cta_module' ) : ?>
                <?php get_template_part( 'templates/components/_cta-module' ); ?>
            <?php elseif ( get_row_layout() == 'two_column_image_text' ) : ?>
                <?php get_template_part( 'templates/components/_two-column-image-text' ); ?>
            <?php elseif ( get_row_layout() == 'two_column_video_and_text' ) : ?>
                <?php get_template_part( 'templates/components/_two-column-video-text' ); ?>
            <?php elseif ( get_row_layout() == 'latest_news' ) : ?>
                <?php get_template_part( 'templates/components/_latest-news' ); ?>
            <?php elseif ( get_row_layout() == 'accordion' ) : ?>
                <?php get_template_part( 'templates/components/_accordion' ); ?>
            <?php elseif ( get_row_layout() == 'feeding_guide' ) : ?>
                <?php get_template_part( 'templates/components/_feeding-guide' ); ?>
            <?php elseif ( get_row_layout() == 'product_range' ) : ?>
                <?php get_template_part( 'templates/components/_product-range' ); ?>
            <?php elseif ( get_row_layout() == 'statistics' ) : ?>
                <?php get_template_part( 'templates/components/_statistics' ); ?>
            <?php elseif ( get_row_layout() == 'hero_statistic' ) : ?>
                <?php get_template_part( 'templates/components/_hero-statistic' ); ?>
            <?php elseif ( get_row_layout() == 'follow_us' ) : ?>
                <?php get_template_part( 'templates/components/_follow-us' ); ?>
            <?php elseif ( get_row_layout() == 'stockist_locator' ) : ?>
                <?php get_template_part( 'templates/components/_stockist-locator' ); ?>
            <?php elseif ( get_row_layout() == 'testimonial' ) : ?>
                <?php get_template_part( 'templates/components/_testimonial' ); ?>                            
    		<?php endif; ?>
    	<?php endwhile; ?>
    <?php else: ?>
    	<?php // no layouts found ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
