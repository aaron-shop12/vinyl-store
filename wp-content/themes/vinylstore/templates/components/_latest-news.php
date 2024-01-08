<section class="latest-news blog-listing-block <?php the_sub_field( 'colour_scheme' ); ?> <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <span class="intro">
            <?php the_sub_field('text'); ?>
            <span class="btnBlock">
                <a class="stdBtn" href="/blog">Browse all articles</a>
            </span>
        </span>    
        <div class="post-listing-content blog-posts-container">
            <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
            <?php $args = array(
                'post_type' => 'post',
                'paged'=> $paged,
                'posts_per_page' => 3
            );
            $posts = new WP_Query( $args );
            if( $posts->have_posts() ): ?>
                <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                    <span class="item one-third" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                        <a href="<?php the_permalink(); ?>">
                            <span class="image-container">
                                <span class="bg-container">
                                    <?php $main_image = get_field( 'listing_image' ); $imgpathfile1= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                    <?php if ( $imgpathfile1 ) { ?>
                                        <img src="<?php echo $imgpathfile1; ?>" alt="<?php the_title(); ?>" />
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
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
