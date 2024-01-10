<?php $q = get_queried_object(); /*print_r($q);*/ ?>
<section class="banner">
    <span class="image">
        <?php $image = get_field('blog_banner_image','options'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <span class="overlay">
            <div class="container">
                <?php if(get_field('blog_banner_text','options')) { ?>
                    <span class="left">
                        <h1><?php the_field('blog_banner_text','options'); ?></h1>
                        <p><?php the_field('blog_banner_copy','options'); ?></p>
                    </span>
                <?php } ?>
            </div>    
        </span>
    </span> 
</section>
<section class="blog-listing-block">
    <div class="container">
        <!-- <div class="title-container">
            <div class="column-one">
                <h1 class="h2-style" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><?php the_field('news_listing_title', 'options'); ?></h1>
            </div>
            <div class="column-two">
                <span class="subtitle" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800"><?php the_field( 'news_listing_subtitle', 'options' ); ?></span>
            </div>
        </div>
        <div class="featured-article-container">
            <?php $post_object = get_field( 'featured_article', 'options' ); ?>
            <?php if ( $post_object ): ?>
            	<?php $post = $post_object; ?>
            	<?php setup_postdata( $post ); ?>
                <?php $postSlug = $post->slug; ?>
            		<a href="<?php the_permalink(); ?>">
                        <span class="featured-article">
                            <span class="featured-text-container">
                                <span class="yellow-text article-pre-title"><?php the_field( 'title' ); ?></span>
                                <h2 class="post-item-title white-text"><?php the_title(); ?></h2>
                                <span class="excerpt small-text white-text"><?php the_field( 'excerpt' ); ?></span>
                            </span>
                            <span class="image-column">
                                <span class="image-container">
                                    <span class="bg-container">
                                        <?php $main_image = get_field( 'listing_image' ); ?>
                                        <?php if ( $main_image ) { ?>
                                            <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt']; ?>" />
                                        <?php } ?>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>
            	<?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div> -->
        <?php if($q -> taxonomy != 'post_tag') { ?>
            <div class="post-filter-container">
                <?php
                    $term_m = 'category';
                    ?>
                    <?php
                    $terms = get_terms( $term_m, array(
                        'hide_empty' => true,
                        'parent' => 0
                    ) );
                ?>
                <span class="post-filter-title">Filter by:</span>
                <a class="post-filter-button text-link<?php if($q->post_name == 'blog'){?> active<?php } ?>" href="/blog" target="_self">All</a>
                <?php foreach($terms as $term) { ?>
                    <a class="post-filter-button text-link<?php if($term->slug == $q->slug){?> active<?php } ?>" href="<?php echo get_term_link($term); ?>" target="_self"><?php echo $term->name; ?></a>
                <?php } ?>
            </div>
        <?php } ?>
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