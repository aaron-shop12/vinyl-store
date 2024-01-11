<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		$productTitle = get_the_title();
		$artist = get_post_meta( get_the_ID(), 'artist_name', true );
		$artistFinal = urlencode($artist);
		$title = get_post_meta( get_the_ID(), 'web_title', true );
		$titleFinal = urlencode($title);
		$catNo = get_post_meta( get_the_ID(), 'cat_no', true );
		$barcode = get_post_meta( get_the_ID(), 'barcode', true );
		$format = get_post_meta( get_the_ID(), 'Format', true );
		$releaseDate = get_post_meta( get_the_ID(), 'release_date', true );
		$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
		?>
		<?php if($productTitle != 'Gift Card') { ?>
			<h1 class="product_title entry-title"><?php echo $artist; ?></h1>
			<h3><?php echo $title; ?></h3>
		<?php } else { ?>
			<h1 class="product_title entry-title"><?php echo $productTitle; ?></h1>
			<div class="woocommerce-product-details__short-description">
				<?php echo $short_description; // WPCS: XSS ok. ?>
			</div>
		<?php } ?>	
		<?php
		//do_action( 'woocommerce_template_single_add_to_cart' );
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
		<?php if($productTitle != 'Gift Card') { ?>
			<p>Format: <?php echo $format; ?><br />Cat No: <?php echo $catNo; ?><br />Barcode: <?php echo $barcode; ?><br />Released: <?php echo $releaseDate; ?></p>
			<?php
			if ( ! $short_description ) {
			return;
			}
			?>
			<div class="woocommerce-product-details__short-description">
				<?php echo $short_description; // WPCS: XSS ok. ?>
			</div>
		<?php } ?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
