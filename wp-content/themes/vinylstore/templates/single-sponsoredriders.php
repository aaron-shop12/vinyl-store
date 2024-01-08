<!-- <section class="banner">
    <span class="image">
        <?php $imgpathfile1= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
        <img src="<?php echo $imgpathfile1; ?>" alt="<?php the_title(); ?>" />
        <span class="overlay">
            <div class="container">
                <span class="center">
                    <h1><?php the_title(); ?></h1>
                </span>
            </div>    
        </span>
    </span> 
</section> -->
<?php if( '' !== get_post()->post_content ) { ?>
    <section class="full-width-text padding-top">
        <div class="container">
            <div class="textBlock blog" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <h1><?php the_title(); ?></h1>
                <?php $imgpathfile1= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
			    <span class="imageBlock">
					<img src="<?php echo $imgpathfile1; ?>" alt="<?php the_title(); ?>" />
				</span>
                <?php the_content(); ?>
            </div>
        </div>    
    </section>
<?php } ?>
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
        <?php elseif ( get_row_layout() == 'two_column_image_and_text' ) : ?>
            <?php get_template_part( 'templates/components/_two-column-image-text' ); ?>
        <?php elseif ( get_row_layout() == 'two_column_video_and_text' ) : ?>
            <?php get_template_part( 'templates/components/_two-column-video-text' ); ?>
        <?php elseif ( get_row_layout() == 'news_block' ) : ?>
            <?php get_template_part( 'templates/components/_latest-news' ); ?>
        <?php elseif ( get_row_layout() == 'accordion' ) : ?>
            <?php get_template_part( 'templates/components/_accordion' ); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else: ?>
    <?php // no layouts found ?>
<?php endif; ?>
<section class="full-width-text padding-top padding-bottom">
    <div class="container">
        <div class="textBlock" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
            <span class="btnBlock">
                <a href="/ambassadors" class="stdBtn">Back to index</a>
            </span>
        </div>
    </div>    
</section>