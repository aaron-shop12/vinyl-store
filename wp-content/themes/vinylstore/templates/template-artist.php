<?php
/**
 * Template Name: Artist
*/
get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
$args = array(
   'post_type' => 'product',
   'meta_key' => 'artist_name',
   'orderby' => 'meta_value_num title',
   'order' => 'ASC',
   'paged' => $paged,
   'posts_per_page' =>-1, 
  
   'meta_query' => array(
       array(
           'key' => 'artist_name',
           'value' => $_GET['artistname'],
           'compare' => '=',
       )
   )
);
$args['paged'] = $paged;
$the_query = new WP_Query($args);
?>
<main class="page flexible woocommerce" id="main">
    <section class="pageTitle">
        <div class="container">
            <h1><?php echo $_GET['artistname']; ?></h1>
        </div>
    </section>
    <section class="default woocommerce">
		<div class="container">
            <?php if ( $the_query->have_posts() ) { ?>
                <ul class="products columns-4">
                    <?php
                        while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        do_action( 'woocommerce_shop_loop' );
                        wc_get_template_part( 'content', 'product' );
                        }
                    ?>
                </ul>
            <?php } ?>
        </div>
    </section>    
</main>
 <?php get_footer(); ?>