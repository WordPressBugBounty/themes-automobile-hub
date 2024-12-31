<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

function automobile_hub_custom_header_setup() {
    add_theme_support( 'custom-header', apply_filters( 'automobile_hub_custom_header_args', array(
        'default-text-color' => 'fff',
        'header-text'        => false,
        'width'              => 1600,
        'height'             => 400,
        'flex-width'         => true,
        'flex-height'        => true,
        'wp-head-callback'   => 'automobile_hub_header_style',
        'default-image'      => get_template_directory_uri() . '/assets/images/sliderimage.png',
    ) ) );

    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/sliderimage.png',
            'description'   => __( 'Default Header Image', 'automobile-hub' ),
        ),
    ) );
}
add_action( 'after_setup_theme', 'automobile_hub_custom_header_setup' );

if ( ! function_exists( 'automobile_hub_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 */
function automobile_hub_header_style() {
    $header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/assets/images/sliderimage.png';

    // Custom CSS for the header
    $automobile_hub_custom_css = "
        .header-img, .single-page-img, .external-div .box-image img {
            background-image: url('".esc_url( $header_image )."') !important;
            background-position: center top !important;
            background-size: cover !important;
            height: 350px;
        }
        @media (max-width: 1000px) {
            .header-img, .single-page-img, .external-div .box-image img, .external-div {
                height: 200px;
            }
        }";
    
    // Add inline styles
    wp_add_inline_style( 'automobile-hub-style', $automobile_hub_custom_css );
}
add_action( 'wp_enqueue_scripts', 'automobile_hub_header_style' );
endif;

/**
 * Enqueue the main theme stylesheet.
 */
function automobile_hub_enqueue_styles() {
    wp_enqueue_style( 'automobile-hub-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'automobile_hub_enqueue_styles' );
