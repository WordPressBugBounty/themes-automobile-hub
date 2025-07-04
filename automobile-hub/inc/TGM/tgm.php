<?php

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function automobile_hub_register_recommended_plugins() {
	$plugins = array(
		array(
            'name'             => __( 'Advanced Appointment Booking & Scheduling', 'automobile-hub' ),
            'slug'             => 'advanced-appointment-booking-scheduling',
            'required'         => false,
            'force_activation' => false,
        ),
        array(
			'name'             => __( 'WooCommerce', 'automobile-hub' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'automobile_hub_register_recommended_plugins' );
