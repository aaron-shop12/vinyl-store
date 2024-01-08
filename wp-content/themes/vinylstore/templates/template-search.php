<section class="blog-listing-block">
    <div class="container">
        <div class="post-listing-content blog-posts-container">
            <?php // Start the Loop.
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <span class="item one-third" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                    <a href="<?php the_permalink(); ?>">
                        <span class="image-container">
                            <span class="bg-container">
                                <?php $main_image = get_field( 'listing_image' ); $imgpathfile1= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                <?php if ( $imgpathfile1 ) { ?>
                                    <img src="<?php echo $imgpathfile1; ?>" alt="<?php the_title(); ?>" />
                                <?php } else { ?>
                                    <?php $imagedark = get_field( 'blog_listing_image', 'options' ); ?>
                                    <img src="<?php echo $imagedark['url']; ?>" alt=""/>
                                <?php } ?>
                            </span>
                        </span>
                        <span class="post-text-container">
                            <h3 class="post-item-title"><?php the_title(); ?></h3>
                            <span class="excerpt small-text"><?php the_excerpt(); ?></span>
                            <span class="text-link">Read More ></span>
                        </span>
                    </a>
                </span>    
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
        <?php wp_pagenavi(); ?>
        <?php wp_reset_query(); ?>
    </div>
</section>        