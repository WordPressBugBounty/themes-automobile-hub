<?php
	
$automobile_hub_tp_theme_css = '';

$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option');

// 1st color
$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option', '#e43315');
if ($automobile_hub_tp_color_option) {
	$automobile_hub_tp_theme_css .= ':root {';
	$automobile_hub_tp_theme_css .= '--color-primary1: ' . esc_attr($automobile_hub_tp_color_option) . ';';
	$automobile_hub_tp_theme_css .= '}';
}

//hover color
$automobile_hub_tp_color_option_link = get_theme_mod('automobile_hub_tp_color_option_link');

if($automobile_hub_tp_color_option_link != false){
$automobile_hub_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover,#theme-sidebar .tagcloud a:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.book-tkt-btn a.bar-btn i:hover,.wc-block-cart__submit-container a:hover{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_color_option_link).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option_link != false){
$automobile_hub_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover , .headerbox i:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover,#footer li a:hover{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_tp_color_option_link).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option_link != false){
$automobile_hub_tp_theme_css .='#footer .tagcloud a:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a:hover,#footer p.wp-block-tag-cloud a:hover{';
$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_color_option_link).';';
$automobile_hub_tp_theme_css .='}';
}

// preloader
$automobile_hub_tp_preloader_color1_option = get_theme_mod('automobile_hub_tp_preloader_color1_option');

if($automobile_hub_tp_preloader_color1_option != false){
$automobile_hub_tp_theme_css .='.center1{';
	$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_preloader_color1_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_preloader_color1_option != false){
$automobile_hub_tp_theme_css .='.center1 .ring::before{';
	$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_color1_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_preloader_color2_option = get_theme_mod('automobile_hub_tp_preloader_color2_option');

if($automobile_hub_tp_preloader_color2_option != false){
$automobile_hub_tp_theme_css .='.center2{';
	$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_preloader_color2_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_preloader_color2_option != false){
$automobile_hub_tp_theme_css .='.center2 .ring::before{';
	$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_color2_option).' !important;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_preloader_bg_color_option = get_theme_mod('automobile_hub_tp_preloader_bg_color_option');

if($automobile_hub_tp_preloader_bg_color_option != false){
$automobile_hub_tp_theme_css .='.loader{';
	$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_preloader_bg_color_option).';';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_tp_footer_bg_color_option = get_theme_mod('automobile_hub_tp_footer_bg_color_option');


if($automobile_hub_tp_footer_bg_color_option != false){
$automobile_hub_tp_theme_css .='#footer{';
	$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_footer_bg_color_option).';';
$automobile_hub_tp_theme_css .='}';
}

// logo tagline color
$automobile_hub_site_tagline_color = get_theme_mod('automobile_hub_site_tagline_color');

if($automobile_hub_site_tagline_color != false){
$automobile_hub_tp_theme_css .='.logo h1 a, .logo p a, .logo p.site-title a{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_site_tagline_color).';';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_logo_tagline_color = get_theme_mod('automobile_hub_logo_tagline_color');
if($automobile_hub_logo_tagline_color != false){
$automobile_hub_tp_theme_css .='p.site-description{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_logo_tagline_color).';';
$automobile_hub_tp_theme_css .='}';
}

// footer widget title color
$automobile_hub_footer_widget_title_color = get_theme_mod('automobile_hub_footer_widget_title_color');
if($automobile_hub_footer_widget_title_color != false){
$automobile_hub_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_footer_widget_title_color).';';
$automobile_hub_tp_theme_css .='}';
}

// copyright text color
$automobile_hub_footer_copyright_text_color = get_theme_mod('automobile_hub_footer_copyright_text_color');
if($automobile_hub_footer_copyright_text_color != false){
$automobile_hub_tp_theme_css .='#footer .site-info p, #footer .site-info a {';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_footer_copyright_text_color).'!important;';
$automobile_hub_tp_theme_css .='}';
}

// header image title color
$automobile_hub_header_image_title_text_color = get_theme_mod('automobile_hub_header_image_title_text_color');
if($automobile_hub_header_image_title_text_color != false){
$automobile_hub_tp_theme_css .='.box-text h2{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_header_image_title_text_color).';';
$automobile_hub_tp_theme_css .='}';
}

// menu color
$automobile_hub_menu_color = get_theme_mod('automobile_hub_menu_color');
if($automobile_hub_menu_color != false){
$automobile_hub_tp_theme_css .='.main-navigation a{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_menu_color).';';
$automobile_hub_tp_theme_css .='}';
}
