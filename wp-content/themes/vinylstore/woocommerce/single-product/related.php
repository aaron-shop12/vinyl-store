<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
$location = get_post_meta(get_the_ID(), 'artist_name', true );
$args = apply_filters(
	 'woocommerce_related_products_args',
	 array (
		'post_type' => 'product',
		'meta_key' => 'artist_name',
    	'orderby' => 'meta_value_num',
    	'order' => 'DESC',
    	'post__not_in'=> array( $product->get_id() ),
		'meta_query' => array(
       		array(
           'key' => 'artist_name',
           'value' =>  $location,
           'compare' => '=',
       		),
			array(
			'key' => '_stock_status',
			'value' => 'instock'
			)
   	 	)
	)
);
$products = new WP_Query( $args );
//print_r($products);
//print_r($location);
if ( $products->have_posts() ) : ?>
	<section class="related products">
		<h2>More Products From <?php echo $location; ?></h2>
		<?php woocommerce_product_loop_start(); ?>
		<?php while ( $products->have_posts() ) : ?>
			<?php
			$products->the_post();
			//print_r($products);
			$post_object = get_post(get_the_id() );
			setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

			wc_get_template_part( 'content', 'product' );
			?>
		<?php endwhile; ?>
		<?php woocommerce_product_loop_end(); ?>
	</section>
<?php
endif;
?>
<?php /*if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;*/

wp_reset_postdata();