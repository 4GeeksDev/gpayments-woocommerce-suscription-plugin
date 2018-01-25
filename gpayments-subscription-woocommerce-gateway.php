<?php
/*
Plugin Name: payments4G - 4Geeks Subscriptions
Plugin URI: https://4geeks.io/payments
Description: 4Geeks Subscriptions integration Woocommerce
Version: 1.0

add_action( 'plugins_loaded', 'cw_gpayments_subscription_init', 0 );

function cw_gpayments_subscription_init() {
    //if condition use to do nothin while WooCommerce is not installed
	if ( ! class_exists( 'WC_Subscriptions_Payment_Gateways' ) ) return;
	include_once( 'gpayments-subscription-woocommerce.php' );
	// class add it too WooCommerce
	add_filter( 'woocommerce_scheduled_subscription_payment', 'cw_add_gpayments_gateway' );
	function cw_add_gpayments_gateway( $methods ) {
		$methods[] = 'WC_Subscriptions_Payment_Gateways';
		return $methods;
	}
}
// Add custom action links
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'cw_gpayments_subscription_gateway_action_links' );
function cw_gpayments_subscription_gateway_action_links( $links ) {
	$plugin_links = array(
		'<a href="' . admin_url( 'admin.php?page=wc-tools&tab=Schedule Actions' ) . '">' . __( 'Setting', 'wc-tools' ) . '</a>',
	);
	return array_merge( $plugin_links, $links );
}*/
?>
