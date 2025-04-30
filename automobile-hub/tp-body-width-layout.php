<?php

$automobile_hub_tp_theme_css = '';

$automobile_hub_theme_lay = get_theme_mod( 'automobile_hub_tp_body_layout_settings','Full');
if($automobile_hub_theme_lay == 'Container'){
$automobile_hub_tp_theme_css .='body{';
$automobile_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$automobile_hub_tp_theme_css .='}';
$automobile_hub_tp_theme_css .='@media screen and (max-width:575px){';
$automobile_hub_tp_theme_css .='body{';
	$automobile_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
$automobile_hub_tp_theme_css .='} }';
$automobile_hub_tp_theme_css .='.scrolled{';
$automobile_hub_tp_theme_css .='width: auto; left:0; right:0;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_theme_lay == 'Container Fluid'){
$automobile_hub_tp_theme_css .='body{';
$automobile_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$automobile_hub_tp_theme_css .='}';
$automobile_hub_tp_theme_css .='@media screen and (max-width:575px){';
$automobile_hub_tp_theme_css .='body{';
	$automobile_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$automobile_hub_tp_theme_css .='} }';
$automobile_hub_tp_theme_css .='.scrolled{';
$automobile_hub_tp_theme_css .='width: auto; left:0; right:0;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_theme_lay == 'Full'){
$automobile_hub_tp_theme_css .='body{';
$automobile_hub_tp_theme_css .='max-width: 100%;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_scroll_position = get_theme_mod( 'automobile_hub_scroll_top_position','Right');
if($automobile_hub_scroll_position == 'Right'){
$automobile_hub_tp_theme_css .='#return-to-top{';
$automobile_hub_tp_theme_css .='right: 20px;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_scroll_position == 'Left'){
$automobile_hub_tp_theme_css .='#return-to-top{';
$automobile_hub_tp_theme_css .='left: 20px;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_scroll_position == 'Center'){
$automobile_hub_tp_theme_css .='#return-to-top{';
$automobile_hub_tp_theme_css .='right: 50%;left: 50%;';
$automobile_hub_tp_theme_css .='}';
}

// related post
$automobile_hub_related_post_mob = get_theme_mod('automobile_hub_related_post_mob', true);
$automobile_hub_related_post = get_theme_mod('automobile_hub_remove_related_post', true);
$automobile_hub_tp_theme_css .= '.related-post-block {';
if ($automobile_hub_related_post == false) {
    $automobile_hub_tp_theme_css .= 'display: none;';
}
$automobile_hub_tp_theme_css .= '}';
$automobile_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($automobile_hub_related_post == false || $automobile_hub_related_post_mob == false) {
    $automobile_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$automobile_hub_tp_theme_css .= '}';

// slider btn
$automobile_hub_slider_buttom_mob = get_theme_mod('automobile_hub_slider_buttom_mob', true);
$automobile_hub_slider_button = get_theme_mod('automobile_hub_slider_button', true);
$automobile_hub_tp_theme_css .= '#slider .more-btn {';
if ($automobile_hub_slider_button == false) {
    $automobile_hub_tp_theme_css .= 'display: none;';
}
$automobile_hub_tp_theme_css .= '}';
$automobile_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($automobile_hub_slider_button == false || $automobile_hub_slider_buttom_mob == false) {
    $automobile_hub_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$automobile_hub_tp_theme_css .= '}';

//return to header mobile               
$automobile_hub_return_to_header_mob = get_theme_mod('automobile_hub_return_to_header_mob', true);
$automobile_hub_return_to_header = get_theme_mod('automobile_hub_return_to_header', true);
$automobile_hub_tp_theme_css .= '.return-to-header{';
if ($automobile_hub_return_to_header == false) {
    $automobile_hub_tp_theme_css .= 'display: none;';
}
$automobile_hub_tp_theme_css .= '}';
$automobile_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($automobile_hub_return_to_header == false || $automobile_hub_return_to_header_mob == false) {
    $automobile_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$automobile_hub_tp_theme_css .= '}';

//blog description              
$automobile_hub_mobile_blog_description = get_theme_mod('automobile_hub_mobile_blog_description', true);
$automobile_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($automobile_hub_mobile_blog_description == false) {
    $automobile_hub_tp_theme_css .= '.blog-description{ display: none; }';
}
$automobile_hub_tp_theme_css .= '}';

// footer
$automobile_hub_footer_widget_image = get_theme_mod('automobile_hub_footer_widget_image');
if($automobile_hub_footer_widget_image != false){
$automobile_hub_tp_theme_css .='#footer{';
$automobile_hub_tp_theme_css .='background: url('.esc_attr($automobile_hub_footer_widget_image).');';
$automobile_hub_tp_theme_css .='}';
}

//Social icon Font size
$automobile_hub_social_icon_fontsize = get_theme_mod('automobile_hub_social_icon_fontsize');
$automobile_hub_tp_theme_css .='.social-media a i{';
$automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_social_icon_fontsize).'px;';
$automobile_hub_tp_theme_css .='}';

// site title and tagline font size option
$automobile_hub_site_title_font_size = get_theme_mod('automobile_hub_site_title_font_size', 30); {
$automobile_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_site_title_font_size).'px !important;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_site_tagline_font_size = get_theme_mod('automobile_hub_site_tagline_font_size', 15);{
$automobile_hub_tp_theme_css .='.logo p{';
$automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_site_tagline_font_size).'px;';
$automobile_hub_tp_theme_css .='}';
}

$automobile_hub_related_product = get_theme_mod('automobile_hub_related_product',true);
if($automobile_hub_related_product == false){
$automobile_hub_tp_theme_css .='.related.products{';
	$automobile_hub_tp_theme_css .='display: none;';
$automobile_hub_tp_theme_css .='}';
}

//menu font size
$automobile_hub_menu_font_size = get_theme_mod('automobile_hub_menu_font_size', '');{
$automobile_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_menu_font_size).'px;';
$automobile_hub_tp_theme_css .='}';
}

// menu text transform
$automobile_hub_menu_text_tranform = get_theme_mod( 'automobile_hub_menu_text_tranform','');
if($automobile_hub_menu_text_tranform == 'Uppercase'){
$automobile_hub_tp_theme_css .='.main-navigation a {';
	$automobile_hub_tp_theme_css .='text-transform: uppercase;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_text_tranform == 'Lowercase'){
$automobile_hub_tp_theme_css .='.main-navigation a {';
	$automobile_hub_tp_theme_css .='text-transform: lowercase;';
$automobile_hub_tp_theme_css .='}';
}
else if($automobile_hub_menu_text_tranform == 'Capitalize'){
$automobile_hub_tp_theme_css .='.main-navigation a {';
	$automobile_hub_tp_theme_css .='text-transform: capitalize;';
$automobile_hub_tp_theme_css .='}';
}
//======================= slider Content layout ===================== //

$automobile_hub_slider_content_layout = get_theme_mod('automobile_hub_slider_content_layout', 'LEFT-ALIGN'); 
$automobile_hub_tp_theme_css .= '#slider .carousel-caption{';
switch ($automobile_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:center; left: 20%; right: 20%';
        break;
    case 'RIGHT-ALIGN':
        $automobile_hub_tp_theme_css .= 'text-align:right; left: 40%; right: 15%';
        break;
    default:
        $automobile_hub_tp_theme_css .= 'text-align:left; right: 40%; left: 15%';
        break;
}
$automobile_hub_tp_theme_css .= '}';

//sale position
$automobile_hub_scroll_position = get_theme_mod( 'automobile_hub_sale_tag_position','right');
if($automobile_hub_scroll_position == 'right'){
$automobile_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $automobile_hub_tp_theme_css .='right: 25px !important;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_scroll_position == 'left'){
$automobile_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $automobile_hub_tp_theme_css .='left: 25px !important; right: auto !important;';
$automobile_hub_tp_theme_css .='}';
}

//Font Weight
$automobile_hub_menu_font_weight = get_theme_mod( 'automobile_hub_menu_font_weight','');
if($automobile_hub_menu_font_weight == '100'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 100;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '200'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 200;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '300'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 300;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '400'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 400;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '500'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 500;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '600'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 600;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '700'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 700;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '800'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 800;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_menu_font_weight == '900'){
$automobile_hub_tp_theme_css .='.main-navigation a{';
    $automobile_hub_tp_theme_css .='font-weight: 900;';
$automobile_hub_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
$automobile_hub_post_image_round = get_theme_mod('automobile_hub_post_image_round', 0);
if($automobile_hub_post_image_round != false){
    $automobile_hub_tp_theme_css .='.blog .box-image img{';
        $automobile_hub_tp_theme_css .='border-radius: '.esc_attr($automobile_hub_post_image_round).'px;';
    $automobile_hub_tp_theme_css .='}';
}

$automobile_hub_post_image_width = get_theme_mod('automobile_hub_post_image_width', '');
if($automobile_hub_post_image_width != false){
    $automobile_hub_tp_theme_css .='.blog .box-image img{';
        $automobile_hub_tp_theme_css .='Width: '.esc_attr($automobile_hub_post_image_width).'px;';
    $automobile_hub_tp_theme_css .='}';
}

$automobile_hub_post_image_length = get_theme_mod('automobile_hub_post_image_length', '');
if($automobile_hub_post_image_length != false){
    $automobile_hub_tp_theme_css .='.blog .box-image img{';
        $automobile_hub_tp_theme_css .='height: '.esc_attr($automobile_hub_post_image_length).'px;';
    $automobile_hub_tp_theme_css .='}';
}

// footer widget title font size
$automobile_hub_footer_widget_title_font_size = get_theme_mod('automobile_hub_footer_widget_title_font_size', '');{
$automobile_hub_tp_theme_css .='#footer h3, #footer h2.wp-block-heading{';
    $automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_footer_widget_title_font_size).'px;';
$automobile_hub_tp_theme_css .='}';
}

// Copyright text font size
$automobile_hub_footer_copyright_font_size = get_theme_mod('automobile_hub_footer_copyright_font_size', '');{
$automobile_hub_tp_theme_css .='#footer .site-info p{';
    $automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_footer_copyright_font_size).'px;';
$automobile_hub_tp_theme_css .='}';
}

// copyright padding
$automobile_hub_footer_copyright_top_bottom_padding = get_theme_mod('automobile_hub_footer_copyright_top_bottom_padding', '');
if ($automobile_hub_footer_copyright_top_bottom_padding !== '') { 
    $automobile_hub_tp_theme_css .= '.site-info {';
    $automobile_hub_tp_theme_css .= 'padding-top: ' . esc_attr($automobile_hub_footer_copyright_top_bottom_padding) . 'px;';
    $automobile_hub_tp_theme_css .= 'padding-bottom: ' . esc_attr($automobile_hub_footer_copyright_top_bottom_padding) . 'px;';
    $automobile_hub_tp_theme_css .= '}';
}

// copyright position
$automobile_hub_copyright_text_position = get_theme_mod( 'automobile_hub_copyright_text_position','Center');
if($automobile_hub_copyright_text_position == 'Center'){
$automobile_hub_tp_theme_css .='#footer .site-info p{';
$automobile_hub_tp_theme_css .='text-align:center;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_copyright_text_position == 'Left'){
$automobile_hub_tp_theme_css .='#footer .site-info p{';
$automobile_hub_tp_theme_css .='text-align:left;';
$automobile_hub_tp_theme_css .='}';
}else if($automobile_hub_copyright_text_position == 'Right'){
$automobile_hub_tp_theme_css .='#footer .site-info p{';
$automobile_hub_tp_theme_css .='text-align:right;';
$automobile_hub_tp_theme_css .='}';
}

// Header Image title font size
$automobile_hub_header_image_title_font_size = get_theme_mod('automobile_hub_header_image_title_font_size', '32');{
$automobile_hub_tp_theme_css .='.box-text h2{';
    $automobile_hub_tp_theme_css .='font-size: '.esc_attr($automobile_hub_header_image_title_font_size).'px;';
$automobile_hub_tp_theme_css .='}';
}

/*--------------------------- banner image Opacity -------------------*/
    $automobile_hub_theme_lay = get_theme_mod( 'automobile_hub_header_banner_opacity_color','0.5');
        if($automobile_hub_theme_lay == '0'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.1'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.1';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.2'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.2';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.3'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.3';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.4'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.4';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.5'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.5';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.6'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.6';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.7'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.7';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.8'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.8';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '0.9'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:0.9';
            $automobile_hub_tp_theme_css .='}';
        }else if($automobile_hub_theme_lay == '1'){
            $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $automobile_hub_tp_theme_css .='opacity:1';
            $automobile_hub_tp_theme_css .='}';
        }

    $automobile_hub_header_banner_image_overlay = get_theme_mod('automobile_hub_header_banner_image_overlay', true);
    if($automobile_hub_header_banner_image_overlay == false){
        $automobile_hub_tp_theme_css .='.single-page-img, .featured-image{';
            $automobile_hub_tp_theme_css .='opacity:1;';
        $automobile_hub_tp_theme_css .='}';
    }

    $automobile_hub_header_banner_image_ooverlay_color = get_theme_mod('automobile_hub_header_banner_image_ooverlay_color', true);
    if($automobile_hub_header_banner_image_ooverlay_color != false){
        $automobile_hub_tp_theme_css .='.box-image-page{';
            $automobile_hub_tp_theme_css .='background-color: '.esc_attr($automobile_hub_header_banner_image_ooverlay_color).';';
        $automobile_hub_tp_theme_css .='}';
    }