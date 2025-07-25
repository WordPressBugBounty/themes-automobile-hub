<?php
/**
 * Automobile Hub functions and definitions
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

function automobile_hub_setup() {

	load_theme_textdomain( 'automobile-hub', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'automobile-hub-featured-image', 2000, 1200, true );
	add_image_size( 'automobile-hub-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'automobile-hub' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
    	'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', automobile_hub_fonts_url() ) );

	add_theme_support( 'custom-header', apply_filters( 'automobile_hub_custom_header_args', array(
        'default-text-color' => 'fff',
        'header-text'        => false,
        'width'              => 1600,
        'height'             => 350,
        'flex-width'         => true,
        'flex-height'        => true,
        'wp-head-callback'   => 'automobile_hub_header_style',
        'default-image'      => get_template_directory_uri() . '/assets/images/sliderimage.png',
    ) ) );

	/**
	 * Implement the Custom Header feature.
	 */
	require get_parent_theme_file_path( '/inc/custom-header.php' );

}
add_action( 'after_setup_theme', 'automobile_hub_setup' );

/**
 * Register custom fonts.
 */
function automobile_hub_fonts_url(){
	$automobile_hub_font_url = '';
	$automobile_hub_font_family = array();
	$automobile_hub_font_family[] = 'Oswald:200,300,400,500,600,700';
	$automobile_hub_font_family[] = 'Roboto:100,100i,300,400,400i,500,500i,700,700i,900,900i';

	$automobile_hub_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Bad Script';
	$automobile_hub_font_family[] = 'Bebas Neue';
	$automobile_hub_font_family[] = 'Fjalla One';
	$automobile_hub_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$automobile_hub_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$automobile_hub_font_family[] = 'Alex Brush';
	$automobile_hub_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Playball';
	$automobile_hub_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Julius Sans One';
	$automobile_hub_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Slabo 13px';
	$automobile_hub_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$automobile_hub_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$automobile_hub_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$automobile_hub_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$automobile_hub_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$automobile_hub_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$automobile_hub_font_family[] = 'Padauk:wght@400;700';
	$automobile_hub_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$automobile_hub_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$automobile_hub_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$automobile_hub_font_family[] = 'Pacifico';
	$automobile_hub_font_family[] = 'Indie Flower';
	$automobile_hub_font_family[] = 'VT323';
	$automobile_hub_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$automobile_hub_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$automobile_hub_font_family[] = 'Fjalla One';
	$automobile_hub_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Oxygen:wght@300;400;700';
	$automobile_hub_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Lobster';
	$automobile_hub_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$automobile_hub_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$automobile_hub_font_family[] = 'Anton';
	$automobile_hub_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$automobile_hub_font_family[] = 'Bree Serif';
	$automobile_hub_font_family[] = 'Gloria Hallelujah';
	$automobile_hub_font_family[] = 'Abril Fatface';
	$automobile_hub_font_family[] = 'Varela Round';
	$automobile_hub_font_family[] = 'Vampiro One';
	$automobile_hub_font_family[] = 'Shadows Into Light';
	$automobile_hub_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$automobile_hub_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Francois One';
	$automobile_hub_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$automobile_hub_font_family[] = 'Patua One';
	$automobile_hub_font_family[] = 'Acme';
	$automobile_hub_font_family[] = 'Satisfy';
	$automobile_hub_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Architects Daughter';
	$automobile_hub_font_family[] = 'Russo One';
	$automobile_hub_font_family[] = 'Monda:wght@400;700';
	$automobile_hub_font_family[] = 'Righteous';
	$automobile_hub_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Hammersmith One';
	$automobile_hub_font_family[] = 'Courgette';
	$automobile_hub_font_family[] = 'Permanent Marke';
	$automobile_hub_font_family[] = 'Cherry Swash:wght@400;700';
	$automobile_hub_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$automobile_hub_font_family[] = 'Poiret One';
	$automobile_hub_font_family[] = 'BenchNine:wght@300;400;700';
	$automobile_hub_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Handlee';
	$automobile_hub_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$automobile_hub_font_family[] = 'Alfa Slab One';
	$automobile_hub_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$automobile_hub_font_family[] = 'Cookie';
	$automobile_hub_font_family[] = 'Chewy';
	$automobile_hub_font_family[] = 'Great Vibes';
	$automobile_hub_font_family[] = 'Coming Soon';
	$automobile_hub_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Days One';
	$automobile_hub_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Shrikhand';
	$automobile_hub_font_family[] = 'Tangerine:wght@400;700';
	$automobile_hub_font_family[] = 'IM Fell English SC';
	$automobile_hub_font_family[] = 'Boogaloo';
	$automobile_hub_font_family[] = 'Bangers';
	$automobile_hub_font_family[] = 'Fredoka One';
	$automobile_hub_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$automobile_hub_font_family[] = 'Shadows Into Light Two';
	$automobile_hub_font_family[] = 'Marck Script';
	$automobile_hub_font_family[] = 'Sacramento';
	$automobile_hub_font_family[] = 'Unica One';
	$automobile_hub_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$automobile_hub_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$automobile_hub_font_family[] = 'DM Serif Display:ital@0;1';
	$automobile_hub_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$automobile_hub_query_args = array(
		'family'	=> rawurlencode(implode('|',$automobile_hub_font_family)),
	);
	$automobile_hub_font_url = add_query_arg($automobile_hub_query_args,'//fonts.googleapis.com/css');
	return $automobile_hub_font_url;
	$contents = automobile_hub_wptt_get_web_font_url( esc_url_raw( $automobile_hub_font_url ) );
}

/**
 * Register widget area.
 */
function automobile_hub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'automobile-hub' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'automobile-hub' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'automobile-hub' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'automobile-hub' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'automobile-hub' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'automobile-hub' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'automobile-hub' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'automobile-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'automobile_hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function automobile_hub_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'automobile-hub-fonts', automobile_hub_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'automobile-hub-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'automobile-hub-style',$automobile_hub_tp_theme_css );
	wp_style_add_data('automobile-hub-style', 'rtl', 'replace');
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'automobile-hub-style',$automobile_hub_tp_theme_css );
	wp_style_add_data('automobile-hub-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'automobile-hub-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'automobile-hub-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );
	

	wp_enqueue_script( 'automobile-hub-custom-scripts', get_template_directory_uri() . '/assets/js/automobile-hub-custom.js', array('jquery'), true );


	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );


	wp_enqueue_script( 'automobile-hub-focus-nav', get_template_directory_uri() . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$automobile_hub_body_font_family = get_theme_mod('automobile_hub_body_font_family', '');

	$automobile_hub_heading_font_family = get_theme_mod('automobile_hub_heading_font_family', '');

	$automobile_hub_menu_font_family = get_theme_mod('automobile_hub_menu_font_family', '');

	$automobile_hub_tp_theme_css = '
		body, p.simplep, .more-btn a{
		    font-family: '.esc_html($automobile_hub_body_font_family).';
		}
		h1,h2, h3, h4, h5, h6, .menubar,.logo h1, .logo p.site-title, p.simplep a, #slider p.slidertop-title, .more-btn a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #theme-sidebar button[type="submit"],
#footer button[type="submit"]{
		    font-family: '.esc_html($automobile_hub_heading_font_family).';
		}
	';
	wp_add_inline_style('automobile-hub-style', $automobile_hub_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'automobile_hub_scripts' );

//Admin Enqueue for Admin
function automobile_hub_admin_enqueue_scripts(){
	wp_enqueue_style('automobile-hub-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_register_script( 'automobile-hub-admin-script', get_template_directory_uri() . '/assets/js/automobile-hub-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'automobile-hub-admin-script',
		'automobile_hub',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('automobile_hub_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('automobile-hub-admin-script');

    wp_localize_script( 'automobile-hub-admin-script', 'automobile_hub_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'automobile_hub_admin_enqueue_scripts' );

/*radio button sanitization*/
function automobile_hub_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Sanitize Sortable control.
function automobile_hub_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

/* Excerpt Limit Begin */
function automobile_hub_excerpt_function($excerpt_count = 35) {
    $automobile_hub_excerpt = get_the_excerpt();

    $AUTOMOBILE_HUB_TEXT_excerpt = wp_strip_all_tags($automobile_hub_excerpt);

    $automobile_hub_excerpt_limit = esc_attr(get_theme_mod('automobile_hub_excerpt_count', $excerpt_count));

    $automobile_hub_theme_excerpt = implode(' ', array_slice(explode(' ', $AUTOMOBILE_HUB_TEXT_excerpt), 0, $automobile_hub_excerpt_limit));

    return $automobile_hub_theme_excerpt;
}

function automobile_hub_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'automobile_hub_loop_columns');
if (!function_exists('automobile_hub_loop_columns')) {
	function automobile_hub_loop_columns() {
		$columns = get_theme_mod( 'automobile_hub_per_columns', 3 );
		return $columns;
	}
}

// Category count 
function automobile_hub_display_post_category_count() {
    $automobile_hub_category = get_the_category();
    $automobile_hub_category_count = ($automobile_hub_category) ? count($automobile_hub_category) : 0;
    $automobile_hub_category_text = ($automobile_hub_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $automobile_hub_category_count . ' ' . $automobile_hub_category_text;
}

//post tag
function custom_tags_filter($automobile_hub_tag_list) {
    // Replace the comma (,) with an empty string
    $automobile_hub_tag_list = str_replace(', ', '', $automobile_hub_tag_list);

    return $automobile_hub_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $automobile_hub_tags = get_the_tags();

    if ($automobile_hub_tags) {
        $automobile_hub_tags_output = '<div class="post_tag">Tags: ';

        $automobile_hub_first_tag = reset($automobile_hub_tags);

        foreach ($automobile_hub_tags as $tag) {
            $automobile_hub_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $automobile_hub_first_tag) {
                $automobile_hub_tags_output .= ' ';
            }
        }

        $automobile_hub_tags_output .= '</div>';

        echo $automobile_hub_tags_output;
    }
}
//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'automobile_hub_per_page', 20 );
function automobile_hub_per_page( $automobile_hub_cols ) {
  	$automobile_hub_cols = get_theme_mod( 'automobile_hub_product_per_page', 9 );
	return $automobile_hub_cols;
}

function automobile_hub_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function automobile_hub_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function automobile_hub_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function automobile_hub_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function automobile_hub_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','automobile_hub_front_page_template' );

// get started
add_action( 'wp_ajax_automobile_hub_dismissed_notice_handler', 'automobile_hub_ajax_notice_handler' );

function automobile_hub_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'automobile_hub_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function automobile_hub_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="automobile-hub-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="automobile-hub-getting-started-notice clearfix">
            <div class="automobile-hub-theme-notice-content">
                <h2 class="automobile-hub-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'automobile-hub' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'automobile-hub')) ?></p>

                <a class="automobile-hub-btn-get-started button button-primary button-hero automobile-hub-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=automobile-hub-about' )); ?>" ><?php esc_html_e( 'Begin Installation - Import Demo', 'automobile-hub' ) ?></a><span class="automobile-hub-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}
add_action( 'admin_notices', 'automobile_hub_activation_notice' );

add_action('after_switch_theme', 'automobile_hub_setup_options');
function automobile_hub_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

// logo
function automobile_hub_logo_width(){

	$automobile_hub_logo_width   = get_theme_mod( 'automobile_hub_logo_width', 80 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $automobile_hub_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'automobile_hub_logo_width' );

function automobile_hub_theme_setup() {

	// footer link
	define('AUTOMOBILE_HUB_CREDIT',__('https://www.themespride.com/products/free-automobile-wordpress-theme','automobile-hub') );
	if ( ! function_exists( 'automobile_hub_credit' ) ) {
		function automobile_hub_credit(){
			echo "<a href=".esc_url(AUTOMOBILE_HUB_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('automobile_hub_footer_text',__('Automobile WordPress Theme','automobile-hub')))."</a>";
		}
	}

	/**
	 * Custom template tags for this theme.
	 */
	require get_parent_theme_file_path( '/inc/template-tags.php' );

	/**
	 * Additional features to allow styling of the templates.
	 */
	require get_parent_theme_file_path( '/inc/template-functions.php' );

	/**
	 * Customizer additions.
	 */
	require get_parent_theme_file_path( '/inc/customizer.php' );

	/**
	 * About Theme Page
	 */
	require get_parent_theme_file_path( '/inc/about-theme.php' );

	/**
	 * Load Theme Web File
	 */
	require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
	/**
	 * Load Theme Web File
	 */
	require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );
	/**
	 * load sortable file
	 */
	require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

	/**
	 * TGM Recommendation
	 */
	require get_parent_theme_file_path( '/inc/TGM/tgm.php' );

}
add_action( 'after_setup_theme', 'automobile_hub_theme_setup' );

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );