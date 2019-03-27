<?php

// Initializing online demo contents
function _filter_marketo_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = esc_url( 'https://wp.xpeedstudio.com/demo-content/marketo' );
	$demos_array			 = array(
		'demo1'			 => array(
			'title'			 => esc_html__( 'Demo1', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo1/demo1.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'furniture'		 => array(
			'title'			 => esc_html__( 'furniture', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/furniture/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'grocery'		 => array(
			'title'			 => esc_html__( 'Grocery', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/grocery/screenshot.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'parts'			 => array(
			'title'			 => esc_html__( 'Auto Parts', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/parts/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'watch'			 => array(
			'title'			 => esc_html__( 'Watch', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/watch/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'shoe'			 => array(
			'title'			 => esc_html__( 'Shoe', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/shoe/shoe.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'jewelry'		 => array(
			'title'			 => esc_html__( 'Jewelry', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/jewelry/jewelry.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'eyeglass'		 => array(
			'title'			 => esc_html__( 'Eye Glass', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/eyeglass/eyeglass.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'rtl'			 => array(
			'title'			 => esc_html__( 'Rtl / Arabic / Hebrow ', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/rtl/rtl.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'vendor'		 => array(
			'title'			 => esc_html__( 'Dokan Multi Vendor', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo1/demo1.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'wcmarketplace'	 => array(
			'title'			 => esc_html__( 'Wc Marketplace Multi vendor', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo1/demo1.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo2'			 => array(
			'title'			 => esc_html__( 'Demo2', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo2/demo2.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo3'			 => array(
			'title'			 => esc_html__( 'Demo3', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo3/demo3.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo4'			 => array(
			'title'			 => esc_html__( 'Demo4', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo4/demo4.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo5'			 => array(
			'title'			 => esc_html__( 'Demo5', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo5/demo5.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo6'			 => array(
			'title'			 => esc_html__( 'Demo6', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo6/demo6.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo7'			 => array(
			'title'			 => esc_html__( 'Demo7', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo7/demo7.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo8'			 => array(
			'title'			 => esc_html__( 'Demo8', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo8/demo8.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
		'demo9'			 => array(
			'title'			 => esc_html__( 'Demo9', 'marketo' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/demo9/demo9.jpg',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/xpeedstudio/portfolio' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_filter_marketo_fw_ext_backups_demos' );

function marketo_ocdi_import_files() {
	return array(
		array(
			'import_file_name'			 => 'Default',
			'categories'				 => array( 'Default' ),
			'import_file_url'			 => 'http://xpeedstudio.net/xml/marketo/marketo.xml',
			'import_widget_file_url'	 => 'http://xpeedstudio.net/xml/marketo/widgets.wie',
			'import_customizer_file_url' => 'http://xpeedstudio.net/xml/marketo/customizer.dat',
			'import_preview_image_url'	 => get_template_directory_uri() . '/screenshot.png',
			'import_notice'				 => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'				 => 'https://wp.xpeedstudio.com/marketo/',
		),
	);
}

add_filter( 'pt-ocdi/import_files', 'marketo_ocdi_import_files' );

function marketo_ocdi_after_import_setup( $selected_import ) {

	//Marketo Assign Our menus to locations.

	$primary_nav	 = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
	$mobile_nav		 = get_term_by( 'name', 'Mobile Menu', 'nav_menu' );
	$vertical_nav	 = get_term_by( 'name', 'Vertical Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'primary'		 => $primary_nav->term_id,
		'mobile_nav'	 => $mobile_nav->term_id,
		'vertical_nav'	 => $vertical_nav->term_id,
	)
	);

	//Marketo Assign front page and posts page (blog page) and other WooCommerce pages to settings
	$front_page_id		 = get_page_by_title( 'Home 02' );
	$blog_page_id		 = get_page_by_title( 'Blog' );
	$shop_page_id		 = get_page_by_title( 'Shop' );
	$cart_page_id		 = get_page_by_title( 'Cart' );
	$checkout_page_id	 = get_page_by_title( 'Checkout' );
	$myaccount_page_id	 = get_page_by_title( 'My Account' );
	$terms_page_id		 = get_page_by_title( 'Terms and Conditions' );
	$wishlist_page		 = get_page_by_title( 'Wishlist' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'woocommerce_shop_page_id', $shop_page_id->ID );
	update_option( 'woocommerce_cart_page_id', $cart_page_id->ID );
	update_option( 'woocommerce_checkout_page_id', $checkout_page_id->ID );
	update_option( 'woocommerce_myaccount_page_id', $myaccount_page_id->ID );
	update_option( 'woocommerce_terms_page_id', $terms_page_id->ID );
	update_option( 'yith_wcwl_wishlist_page_id', $wishlist_page->ID );

	// Update Wishlist Position
	update_option( 'yith_wcwl_button_position', 'shortcode' );

	// Enable Registration on "My Account" page
	update_option( 'woocommerce_enable_myaccount_registration', 'yes' );




	if ( class_exists( 'RevSlider' ) ) {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-includes/functions.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );

		if ( 'Default' === $selected_import[ 'import_file_name' ] ) {
			$slider_array = array(
				'http://xpeedstudio.net/xml/marketo/home_slider_1.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-2.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-3.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-4.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-7.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-8.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-9.zip',
			);
		} else {
			$slider_array = array(
				'http://xpeedstudio.net/xml/marketo/home_slider_1.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-2.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-3.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-4.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-7.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-8.zip',
				'http://xpeedstudio.net/xml/marketo/home-slider-9.zip',
			);
		}
		$slider = new RevSlider();

		foreach ( $slider_array as $filepath ) {
			$slider->importSliderFromPost( true, true, $filepath );
		}
	}

	if ( function_exists( 'wc_delete_product_transients' ) ) {
		wc_delete_product_transients();
	}
	if ( function_exists( 'wc_delete_shop_order_transients' ) ) {
		wc_delete_shop_order_transients();
	}
	if ( function_exists( 'wc_delete_expired_transients' ) ) {
		wc_delete_expired_transients();
	}
}

add_action( 'pt-ocdi/after_import', 'marketo_ocdi_after_import_setup' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function ocdi_plugin_page_setup( $default_settings ) {
	$default_settings[ 'parent_slug' ]	 = 'themes.php';
	$default_settings[ 'page_title' ]	 = esc_html__( 'XpeedStudio One Click Demo Import', 'pt-ocdi' );
	$default_settings[ 'menu_title' ]	 = esc_html__( 'Import Demo Data', 'pt-ocdi' );
	$default_settings[ 'capability' ]	 = 'import';
	$default_settings[ 'menu_slug' ]	 = 'xs-one-click-demo-import';

	return $default_settings;
}

add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );

function ocdi_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text">This is a custom text added to this plugin intro text.</div>';

	return $default_text;
}

add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );
