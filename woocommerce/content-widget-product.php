<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product; ?>
<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
		<span class="widget-product-title"><?php echo $product->get_title(); ?></span>
	</a>
        <?php echo $product->get_price_html(); ?>
	<?php if ( ! empty( $show_rating ) ) {

        $count   = $product->get_rating_count();
        $average = $product->get_average_rating();
        $avclass = trizzy_get_rating_class($average);

        if ( $count > 0 ) : ?>

            <div class="woocommerce-product-rating reviews-counter" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <div class="star-rating rating <?php echo $avclass; ?>" title="<?php printf( __( 'Rated %s out of 5', 'trizzy' ), $average ); ?>">
                    <div class="star-rating"></div>
                    <div class="star-bg"></div>
                </div>
            </div>
    <?php endif;
    } ?>

</li>