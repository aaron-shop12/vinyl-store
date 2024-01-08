<div class="sidebar-container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
    <?php $post_object = get_field( 'sidebar_post', 'options' ); ?>
    <?php if ( $post_object ){ ?>
        <?php $post = $post_object; ?>
        <a href="<?php the_permalink(); ?>" target="_self">
            <span class="image-container">
                <span class="bg-container">
                    <?php $sidebar_image = get_field( 'listing_image' ); ?>
                    <?php if ( $sidebar_image ) { ?>
                    	<img src="<?php echo $sidebar_image['url']; ?>" alt="<?php echo $sidebar_image['alt']; ?>" />
                    <?php } ?>
                </span>
            </span>
        </a>
        <span class="sidebar-text-container">
            <a class="sidebar-title-link" href="<?php the_permalink(); ?>" target="_self">
                <h4><?php the_title(); ?></h4>
            </a>
            <?php if ( have_rows( 'sidebar_links', 'options' ) ) : ?>
                <span class="sidebar-links">
                	<?php while ( have_rows( 'sidebar_links', 'options' ) ) : the_row(); ?>
                		<?php if ( have_rows( 'sidebar_link' ) ) : ?>
                			<?php while ( have_rows( 'sidebar_link' ) ) : the_row(); ?>
                                <span class="sidebar-link">
                                    <a class="sidebar-menu-item" href="<?php the_sub_field( 'link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
                                </span>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                	<?php endwhile; ?>
                </span>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>
	<?php setup_postdata( $post ); ?>
    <?php } else { ?>
        <span class="sidebar-text-container">
            <?php if ( have_rows( 'sidebar_links', 'options' ) ) : ?>
                <span class="sidebar-links">
                	<?php while ( have_rows( 'sidebar_links', 'options' ) ) : the_row(); ?>
                		<?php if ( have_rows( 'sidebar_link' ) ) : ?>
                			<?php while ( have_rows( 'sidebar_link' ) ) : the_row(); ?>
                                <span class="sidebar-link">
                                    <a class="sidebar-menu-item" href="<?php the_sub_field( 'link' ); ?>" target="<?php the_sub_field( 'link_target' ); ?>"><?php the_sub_field( 'link_text' ); ?></a>
                                </span>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                	<?php endwhile; ?>
                </span>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>
    <?php } ?>
</div>
