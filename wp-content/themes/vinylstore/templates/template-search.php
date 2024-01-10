<section class="default woocommerce">
    <div class="container">
            <?php // Start the Loop.
            do_action( 'woocommerce_before_shop_loop' );
	        woocommerce_product_loop_start();
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php
                    /**
                    * Hook: woocommerce_shop_loop.
                    */
                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                 ?>  
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php
                woocommerce_product_loop_end();
                /**
                * Hook: woocommerce_after_shop_loop.
                *
                * @hooked woocommerce_pagination - 10
                */
                do_action( 'woocommerce_after_shop_loop' );
            ?>
       
        <?php /*wp_reset_query();*/ ?>
    </div>
</section>        