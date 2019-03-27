<?php
/**
 * The Template for displaying all reviews.
 *
 * @package dokan
 * @package dokan - 2014 1.0
 */

$store_user = get_userdata(get_query_var('author'));
$store_info = dokan_get_store_info($store_user->ID);
$map_location = isset($store_info['location']) ? esc_attr($store_info['location']) : '';
$sidebar          = marketo_option( 'shop_sidebar', marketo_defaults( 'shop_sidebar' ) );
$dcokan_sidebar = dokan_get_option( 'enable_theme_store_sidebar', 'dokan_general', 'off' );

$store_class .= $sidebar == 1 ? '' : ' dokan-w8 col-lg-8';

get_header('shop');



?>
<div class="container">
    <div class="row  <?php echo esc_attr($sidebar == 3 ? 'flex-row-reverse' : ''); ?>">
<?php
if($sidebar != 1) {
    if ( $dcokan_sidebar == 'off' ) { ?>
        <div id="dokan-secondary" class="dokan-clearfix dokan-w3 dokan-store-sidebar" role="complementary" style="margin-<?php echo esc_attr($sidebar == 3 ? 'left': 'right');?> :3%;">
            <div class="dokan-widget-area widget-collapse">
                <?php do_action( 'dokan_sidebar_store_before', $store_user->data, $store_info ); ?>
                <?php
                if ( ! dynamic_sidebar( 'sidebar-store' ) ) {
                    $args = array(
                        'before_widget' => '<aside class="widget">',
                        'after_widget'  => '</aside>',
                        'before_title'  => '<h3 class="widget-title">',
                        'after_title'   => '</h3>',
                    );

                    if ( class_exists( 'Dokan_Store_Location' ) ) {
                        the_widget( 'Dokan_Store_Category_Menu', array( 'title' => __( 'Store Category', 'marketo' ) ), $args );

                        if ( dokan_get_option( 'store_map', 'dokan_general', 'on' ) == 'on'  && !empty( $map_location ) ) {
                            the_widget( 'Dokan_Store_Location', array( 'title' => __( 'Store Location', 'marketo' ) ), $args );
                        }

                        if ( dokan_get_option( 'contact_seller', 'dokan_general', 'on' ) == 'on' ) {
                            the_widget( 'Dokan_Store_Contact_Form', array( 'title' => __( 'Contact Vendor', 'marketo' ) ), $args );
                        }
                    }

                }
                ?>

                <?php do_action( 'dokan_sidebar_store_after', $store_user->data, $store_info ); ?>
            </div>
        </div><!-- #secondary .widget-area -->
        <?php
    } else {
        get_sidebar( 'store' );
    }
}
?>

<div id="dokan-primary" class="dokan-single-store <?php echo esc_attr($store_class); ?>">
    <div id="dokan-content" class="store-review-wrap woocommerce" role="main">

        <?php dokan_get_template_part('store-header'); ?>

        <?php
        $dokan_template_reviews = Dokan_Pro_Reviews::init();
        $id = $store_user->ID;
        $post_type = 'product';
        $limit = 20;
        $status = '1';
        $comments = $dokan_template_reviews->comment_query($id, $post_type, $limit, $status);
        ?>
        <div class="xs_dokan_review">
            <div id="reviews">
                <div id="comments">

                    <?php do_action('dokan_review_tab_before_comments'); ?>

                    <h2 class="headline"><?php _e('Vendor Review', 'marketo'); ?></h2>

                    <ol class="commentlist">
                        <?php echo $dokan_template_reviews->render_store_tab_comment_list($comments, $store_user->ID); ?>
                    </ol>

                </div>
            </div>
        </div>

        <?php
        echo $dokan_template_reviews->review_pagination($id, $post_type, $limit, $status);
        ?>

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
</div>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
