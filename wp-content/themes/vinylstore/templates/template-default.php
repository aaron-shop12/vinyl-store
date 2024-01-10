<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="pageTitle">
        <div class="container">
            <?php if(get_field('page_title')) { ?>
                <h1><?php the_field('page_title'); ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>
        </div>
    </section>
    <section class="post-block post-content background-transparent default-template woocommerce">
        <div class="container">
            <div class="post-content-outer">
                <div class="post-content-container">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else : ?>
<?php endif; ?>
<?php if(is_front_page()) { ?>
    <section class="pageTitle catList">
        <div class="container">
            <h1>Explore all our vinyl</h1>
        </div>
    </section>
    <section class="categoryList">
        <div class="container">
            <div class="grid">
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                ));
                foreach( $terms as $term ) {
                    $imageID = get_term_meta( $term->term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $imageID );
                ?>
                    <?php if($imageID) { ?>
                        <a href="/product-category/<?php echo $term -> slug; ?>">
                            <span class="image">
                                <img src="<?php echo $image; ?>" alt="<?php echo $term -> name; ?>" />
                            </span>
                            <span class="title"><?php echo $term -> name; ?></span>
                        </a>
                    <?php } ?>
                <?php } ?>
            </div>    
        </div>
    </section>
<?php } else { ?>
    <section class="baseBlocks">
    <div class="container">
        <div class="blocks">
            <?php while ( have_rows( 'base_blocks','options' ) ) : the_row(); ?>
                <div>
                    <span class="icon">
                        <?php the_sub_field('icon'); ?>
                    </span>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <?php the_sub_field('text'); ?>
                </div>
            <?php endwhile; ?>
        </div>    
    </div>
</section>
<?php } ?>
<section class="baseImage">
    <span class="image">
        <img src="<?php the_field('base_image','options'); ?>" alt="Metropolis Touring Company" />
    </span>
    <span class="title"><h4>Metropolis Touring Company</h4></span>
</section>