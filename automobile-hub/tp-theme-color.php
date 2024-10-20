<?php
	
$automobile_hub_tp_theme_css = '';

$automobile_hub_tp_color_option = get_theme_mod('automobile_hub_tp_color_option');

if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .headerbox i, .more-btn i , .headerbox i:after,.wp-block-button__link,.error-404 [type="submit"] ,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,#theme-sidebar .wp-block-search .wp-block-search__label:before, #theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before, #theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before,.site-info,.wp-block-woocommerce-cart .wp-block-button .wp-block-button__link,.more-btn i:after, .inner_searchbox button[type="submit"]{';
$automobile_hub_tp_theme_css .='background: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3, .woocommerce-message::before, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, p.infotext, #about h3 , .search-box i, .social-media i:hover , .main-navigation a:hover, .main-navigation, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,.wp-block-search .wp-block-search__label,a.added_to_cart.wc-forward,.box-info i,.readmore-btn a,#theme-sidebar .wp-block-search .wp-block-search__label, p.simplep a:hover, #slider .inner_carousel h1 a:hover, .more-btn a:hover, #about h3 a:hover, #about .more-btn a:hover, #about h2, .search-bar i, .logo h1 a:hover, .logo p.site-title a:hover{';
$automobile_hub_tp_theme_css .='color: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .='.woocommerce-message {';
$automobile_hub_tp_theme_css .='border-top-color: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .=' .page-box,#theme-sidebar section {';
$automobile_hub_tp_theme_css .='border-bottom-color: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .='.page-box,#theme-sidebar section{';
$automobile_hub_tp_theme_css .='border-left-color: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
}
if($automobile_hub_tp_color_option != false){
$automobile_hub_tp_theme_css .='.wp-block-quote:not(.is-large):not(.is-style-large),.readmore-btn a {';
$automobile_hub_tp_theme_css .='border-color: '.esc_attr($automobile_hub_tp_color_option).';';
$automobile_hub_tp_theme_css .='}';
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
