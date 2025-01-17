<?php
/**
 * Automobile Hub: Customizer
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function automobile_hub_customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');
	
	// Register the custom control type.
	$wp_customize->register_control_type( 'Automobile_Hub_Toggle_Control' );
	
	//Register the sortable control type.
	$wp_customize->register_control_type( 'Automobile_Hub_Control_Sortable' );

	//add home page setting pannel
	$wp_customize->add_panel( 'automobile_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'automobile-hub' ),
	    'description' => __( 'Description of what this panel does.', 'automobile-hub' ),
	) );
	
	//TP GENRAL OPTION
	$wp_customize->add_section('automobile_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'automobile-hub'),
        'priority' => 1,
        'panel' => 'automobile_hub_panel_id'
    ) );
    $wp_customize->add_setting('automobile_hub_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
    $wp_customize->add_control('automobile_hub_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'automobile-hub'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'automobile-hub'),
        'section' => 'automobile_hub_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','automobile-hub'),
            'Container' => __('Container','automobile-hub'),
            'Container Fluid' => __('Container Fluid','automobile-hub')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('automobile_hub_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'automobile-hub'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'automobile-hub'),
        'section' => 'automobile_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','automobile-hub'),
            'left' => __('Left','automobile-hub'),
            'right' => __('Right','automobile-hub'),
            'three-column' => __('Three Columns','automobile-hub'),
            'four-column' => __('Four Columns','automobile-hub'),
            'grid' => __('Grid Layout','automobile-hub')
        ),
	) );

	// Add Settings and Controls for post sidebar Layout
	$wp_customize->add_setting('automobile_hub_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'automobile-hub'),
        'description'   => __('This option work for single blog page', 'automobile-hub'),
        'section' => 'automobile_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','automobile-hub'),
            'left' => __('Left','automobile-hub'),
            'right' => __('Right','automobile-hub'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('automobile_hub_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'automobile-hub'),
        'description'   => __('This option work for pages.', 'automobile-hub'),
        'section' => 'automobile_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','automobile-hub'),
            'left' => __('Left','automobile-hub'),
            'right' => __('Right','automobile-hub')
        ),
	) );
	$wp_customize->add_setting( 'automobile_hub_sticky', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_sticky', array(
		'label'       => esc_html__( 'Show Sticky Header', 'automobile-hub' ),
		'section'     => 'automobile_hub_tp_general_settings',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_sticky',
	) ) );

	//tp typography option
	$automobile_hub_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('automobile_hub_typography_option',array(
		'title'         => __('TP Typography Option', 'automobile-hub'),
		'priority' => 1,
		'panel' => 'automobile_hub_panel_id'
   	));

   	$wp_customize->add_setting('automobile_hub_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'automobile_hub_heading_font_family', array(
		'section' => 'automobile_hub_typography_option',
		'label'   => __('heading Fonts', 'automobile-hub'),
		'type'    => 'select',
		'choices' => $automobile_hub_font_array,
	));

	$wp_customize->add_setting('automobile_hub_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'automobile_hub_body_font_family', array(
		'section' => 'automobile_hub_typography_option',
		'label'   => __('Body Fonts', 'automobile-hub'),
		'type'    => 'select',
		'choices' => $automobile_hub_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('automobile_hub_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'automobile-hub'),
		'priority' => 1,
		'panel' => 'automobile_hub_panel_id'
	) );
	$wp_customize->add_setting( 'automobile_hub_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'automobile-hub' ),
		'section'     => 'automobile_hub_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'automobile_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'automobile-hub'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'automobile-hub'),
	    'section' => 'automobile_hub_prelaoder_option',
	    'settings' => 'automobile_hub_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'automobile_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'automobile-hub'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'automobile-hub'),
	    'section' => 'automobile_hub_prelaoder_option',
	    'settings' => 'automobile_hub_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'automobile_hub_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'automobile-hub'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'automobile-hub'),
	    'section' => 'automobile_hub_prelaoder_option',
	    'settings' => 'automobile_hub_tp_preloader_bg_color_option',
  	)));

	//TP Color Option
	$wp_customize->add_section('automobile_hub_color_option',array(
     'title'         => __('TP Color Option', 'automobile-hub'),
     'priority' => 1,
     'panel' => 'automobile_hub_panel_id'
    ) );
    
	$wp_customize->add_setting( 'automobile_hub_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_color_option', array(
			'label'     => __('Theme First Color', 'automobile-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'automobile-hub'),
	    'section' => 'automobile_hub_color_option',
	    'settings' => 'automobile_hub_tp_color_option',
  	)));
  	
  	$wp_customize->add_setting( 'automobile_hub_tp_color_option_link', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_color_option_link', array(
			'label'     => __('Theme Second Color', 'automobile-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'automobile-hub'),
	    'section' => 'automobile_hub_color_option',
	    'settings' => 'automobile_hub_tp_color_option_link',
  	)));

	//TP Blog Option
	$wp_customize->add_section('automobile_hub_blog_option',array(
        'title' => __('TP Blog Option', 'automobile-hub'),
        'priority' => 1,
        'panel' => 'automobile_hub_panel_id'
    ) );
	/** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment','category'),
        'sanitize_callback' => 'automobile_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new Automobile_Hub_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'automobile-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'automobile-hub') ,
        'section' => 'automobile_hub_blog_option',
        'choices' => array(
            'date' => __('date', 'automobile-hub') ,
            'author' => __('author', 'automobile-hub') ,
            'comment' => __('comment', 'automobile-hub') ,
            'category' => __('category', 'automobile-hub') ,
        ) ,
    )));
    $wp_customize->add_setting( 'automobile_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'automobile_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
    $wp_customize->add_setting('automobile_hub_read_more_text',array(
		'default'=> __('Read More','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','automobile-hub'),
		'section'=> 'automobile_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('automobile_hub_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'automobile_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new automobile_hub_Range_Slider($wp_customize, 'automobile_hub_post_image_round', array(
       'section' => 'automobile_hub_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'automobile-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('automobile_hub_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'automobile_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new automobile_hub_Range_Slider($wp_customize, 'automobile_hub_post_image_width', array(
       'section' => 'automobile_hub_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'automobile-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('automobile_hub_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'automobile_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new automobile_hub_Range_Slider($wp_customize, 'automobile_hub_post_image_length', array(
       'section' => 'automobile_hub_blog_option',
      'label' => esc_html__('Edit Post Image height', 'automobile-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));
	
	$wp_customize->add_setting( 'automobile_hub_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_remove_read_button',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_remove_tags',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_remove_category',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'automobile-hub' ),
	 'section'     => 'automobile_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'automobile_hub_remove_comment',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'automobile-hub' ),
	 'section'     => 'automobile_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'automobile_hub_remove_related_post',
	) ) );
	$wp_customize->add_setting('automobile_hub_related_post_heading',array(
		'default'=> __('Related Posts','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_related_post_heading',array(
		'label'	=> __('Edit Section Title','automobile-hub'),
		'section'=> 'automobile_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'automobile_hub_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'automobile_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_hub_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );
	$wp_customize->add_setting( 'automobile_hub_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'automobile_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_hub_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','automobile-hub' ),
		'section'     => 'automobile_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	$wp_customize->add_setting('automobile_hub_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'automobile-hub'),
        'section' => 'automobile_hub_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','automobile-hub'),
            'content-image' => __('Content-Media','automobile-hub'),
        ),
	) );

	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'automobile_hub_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'automobile-hub' ),
    	'priority' => 2,
		'panel' => 'automobile_hub_panel_id'
	) );

	$wp_customize->add_setting('automobile_hub_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'automobile_hub_menu_font_family', array(
		'section' => 'automobile_hub_menu_typography',
		'label'   => __('Menu Fonts', 'automobile-hub'),
		'type'    => 'select',
		'choices' => $automobile_hub_font_array,
	));

	$wp_customize->add_setting('automobile_hub_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'automobile-hub'),
     'section' => 'automobile_hub_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','automobile-hub'),
         '200' => __('200','automobile-hub'),
         '300' => __('300','automobile-hub'),
         '400' => __('400','automobile-hub'),
         '500' => __('500','automobile-hub'),
         '600' => __('600','automobile-hub'),
         '700' => __('700','automobile-hub'),
         '800' => __('800','automobile-hub'),
         '900' => __('900','automobile-hub')
     ),
	) );

	$wp_customize->add_setting('automobile_hub_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'automobile_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('automobile_hub_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','automobile-hub'),
		'section' => 'automobile_hub_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','automobile-hub'),
		   'Lowercase' => __('Lowercase','automobile-hub'),
		   'Capitalize' => __('Capitalize','automobile-hub'),
		),
	) );
	$wp_customize->add_setting('automobile_hub_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'automobile_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Automobile_Hub_Range_Slider($wp_customize, 'automobile_hub_menu_font_size', array(
        'section' => 'automobile_hub_menu_typography',
        'label' => esc_html__('Font Size', 'automobile-hub'),
        'input_attrs' => array(
          'min' => 0,
          'max' => 20,
          'step' => 1
    )
	)));

	// Top Bar
	$wp_customize->add_section( 'automobile_hub_topbar', array(
    	'title'      => __( 'Contact Details', 'automobile-hub' ),
    	'priority' => 2,
    	'description' => __( 'Add your contact details', 'automobile-hub' ),
		'panel' => 'automobile_hub_panel_id'
	) );

	$wp_customize->add_setting('automobile_hub_mail_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_mail_text',array(
		'label'	=> __('Add Email Text','automobile-hub'),
		'section'=> 'automobile_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('automobile_hub_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('automobile_hub_mail',array(
		'label'	=> __('Add Mail Address','automobile-hub'),
		'section'=> 'automobile_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('automobile_hub_mail_icon',array(
		'default'	=> 'fas fa-envelope-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_mail_icon',array(
		'label'	=> __('Mail Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('automobile_hub_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_call_text',array(
		'label'	=> __('Add Call Text','automobile-hub'),
		'section'=> 'automobile_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('automobile_hub_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'automobile_hub_sanitize_phone_number'
	));
	$wp_customize->add_control('automobile_hub_call',array(
		'label'	=> __('Add Phone Number','automobile-hub'),
		'section'=> 'automobile_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('automobile_hub_call_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_call_icon',array(
		'label'	=> __('Call Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'automobile_hub_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'automobile-hub' ),
		'section'     => 'automobile_hub_topbar',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_search_icon',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_cart_option', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_cart_option', array(
		'label'       => esc_html__( 'Show / Hide Cart Option', 'automobile-hub' ),
		'section'     => 'automobile_hub_topbar',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_cart_option',
	) ) );

	$wp_customize->add_setting('automobile_hub_cart_icon',array(
		'default'	=> 'fas fa-shopping-basket',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_cart_icon',array(
		'label'	=> __('Cart Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_topbar',
		'type'		=> 'icon'
	)));

	//Social Media
	$wp_customize->add_section( 'automobile_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'automobile-hub' ),
    	'priority' => 3,
    	'description' => __( 'Add your Social Links', 'automobile-hub' ),
		'panel' => 'automobile_hub_panel_id'
	) );
	
	$wp_customize->add_setting( 'automobile_hub_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'automobile-hub' ),
		'section'     => 'automobile_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_header_fb_new_tab',
	) ) );	

	$wp_customize->add_setting('automobile_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('automobile_hub_facebook_url',array(
		'label'	=> __('Facebook Link','automobile-hub'),
		'section'=> 'automobile_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('automobile_hub_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_facebook_icon',array(
		'label'	=> __('Facebook Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'automobile_hub_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'automobile-hub' ),
		'section'     => 'automobile_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_header_twt_new_tab',
	) ) );

	$wp_customize->add_setting('automobile_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('automobile_hub_twitter_url',array(
		'label'	=> __('Twitter Link','automobile-hub'),
		'section'=> 'automobile_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('automobile_hub_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_twitter_icon',array(
		'label'	=> __('Twitter Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'automobile_hub_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'automobile-hub' ),
		'section'     => 'automobile_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_header_ins_new_tab',
	) ) );

	$wp_customize->add_setting('automobile_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('automobile_hub_instagram_url',array(
		'label'	=> __('Instagram Link','automobile-hub'),
		'section'=> 'automobile_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('automobile_hub_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_instagram_icon',array(
		'label'	=> __('Instagram Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'automobile_hub_header_ut_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_header_ut_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'automobile-hub' ),
		'section'     => 'automobile_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_header_ut_new_tab',
	) ) );

	$wp_customize->add_setting('automobile_hub_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('automobile_hub_youtube_url',array(
		'label'	=> __('YouTube Link','automobile-hub'),
		'section'=> 'automobile_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('automobile_hub_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_youtube_icon',array(
		'label'	=> __('Youtube Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'automobile_hub_header_pint_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_header_pint_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'automobile-hub' ),
		'section'     => 'automobile_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_header_pint_new_tab',
	) ) );

	$wp_customize->add_setting('automobile_hub_pint_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('automobile_hub_pint_url',array(
		'label'	=> __('Pinterest Link','automobile-hub'),
		'section'=> 'automobile_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('automobile_hub_pint_icon',array(
		'default'	=> 'fab fa-pinterest',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_pint_icon',array(
		'label'	=> __('Instagram Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('automobile_hub_social_icon_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_social_icon_fontsize',array(
		'label'	=> __('Social Icons Font Size in PX','automobile-hub'),
		'type'=> 'number',
		'section'=> 'automobile_hub_social_media',
		'input_attrs' => array(
	      		'step' => 1,
				'min'  => 0,
				'max'  => 30,
	        ),
	));

	//home page slider
	$wp_customize->add_section( 'automobile_hub_slider_section' , array(
    	'title'      => __( 'Slider Section', 'automobile-hub' ),
    	'priority' => 3,
		'panel' => 'automobile_hub_panel_id'
	) );

	$wp_customize->add_setting( 'automobile_hub_slider_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide Slider', 'automobile-hub' ),
		'priority' => 1,
		'section'     => 'automobile_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_slider_arrows',
	) ) );

	
	$wp_customize->add_setting('automobile_hub_slider_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_slider_text',array(
		'label'	=> __('Add Slider Top Text','automobile-hub'),
		'section'=> 'automobile_hub_slider_section',
		'type'=> 'text'
	));

	for ( $automobile_hub_count = 1; $automobile_hub_count <= 4; $automobile_hub_count++ ) {

		$wp_customize->add_setting( 'automobile_hub_slider_page' . $automobile_hub_count, array(
			'default'           => '',
			'sanitize_callback' => 'automobile_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'automobile_hub_slider_page' . $automobile_hub_count, array(
			'label'    => __( 'Select Slide Image Page', 'automobile-hub' ),
			'priority' => 1,
			'section'  => 'automobile_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );

	}

	$wp_customize->add_setting( 'automobile_hub_slider_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_slider_button', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'automobile-hub' ),
		'priority' => 1,
		'section'     => 'automobile_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_slider_button',
	) ) );

	$wp_customize->add_setting('automobile_hub_slider_icon',array(
		'default'	=> 'fas fa-hand-point-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_slider_icon',array(
		'label'	=> __('Readmore Icon','automobile-hub'),
		'priority' => 1,
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_slider_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('automobile_hub_slider_content_layout',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'automobile-hub'),
        'section' => 'automobile_hub_slider_section',
        'choices' => array(
            'LEFT-ALIGN' => __('LEFT-ALIGN','automobile-hub'),        	
            'CENTER-ALIGN' => __('CENTER-ALIGN','automobile-hub'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','automobile-hub'),
        ),
	) );

	//About Section
	$wp_customize->add_section('automobile_hub_about_section',array(
		'title'	=> __('About Section','automobile-hub'),
		'panel' => 'automobile_hub_panel_id',
		'priority' => 3,
	));

	$wp_customize->add_setting( 'automobile_hub_about_show_hide', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_about_show_hide', array(
		'label'       => esc_html__( 'Show / Hide About Section', 'automobile-hub' ),
		'section'     => 'automobile_hub_about_section',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_about_show_hide',
		'priority' => 1,
	) ) );

	$wp_customize->add_setting('automobile_hub_about_tittle',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_about_tittle',array(
		'label'	=> __('About Title','automobile-hub'),
		'section'	=> 'automobile_hub_about_section',
		'type'		=> 'text',
		'priority' => 1,
	));

	$wp_customize->add_setting( 'automobile_hub_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'automobile_hub_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'automobile_hub_about_page', array(
		'label'    => __( 'Select About Page', 'automobile-hub' ),
		'section'  => 'automobile_hub_about_section',
		'type'     => 'dropdown-pages',
		'priority' => 1,
	) );
	
	$wp_customize->add_setting('automobile_hub_about_icon',array(
		'default'	=> 'fas fa-hand-point-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
        $wp_customize,'automobile_hub_about_icon',array(
		'label'	=> __('About Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_about_section',
		'type'		=> 'icon'
	)));

	//footer
	$wp_customize->add_section('automobile_hub_footer_section',array(
		'title'	=> __('Footer Text','automobile-hub'),
		'description'	=> __('Add copyright text.','automobile-hub'),
		'panel' => 'automobile_hub_panel_id',
		'priority' => 4,
	));

	$wp_customize->add_setting('automobile_hub_footer_text',array(
		'default'	=> 'Automobile WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_footer_text',array(
		'label'	=> __('Copyright Text','automobile-hub'),
		'section'	=> 'automobile_hub_footer_section',
		'type'		=> 'text'
	));

	//footer widget title font size
	$wp_customize->add_setting('automobile_hub_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','automobile-hub'),
		'section'	=> 'automobile_hub_footer_section',
	    'setting'	=> 'automobile_hub_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'automobile_hub_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'automobile-hub'),
	    'section' => 'automobile_hub_footer_section',
	    'settings' => 'automobile_hub_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('automobile_hub_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','automobile-hub'),
		'section'	=> 'automobile_hub_footer_section',
	    'setting'	=> 'automobile_hub_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// Add Settings and Controls for Scroll top
	$wp_customize->add_setting('automobile_hub_copyright_text_position',array(
        'default' => 'Center',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_copyright_text_position',array(
        'type' => 'radio',
        'label'     => __('Copyright Text Position', 'automobile-hub'),
        'description'   => __('This option work for Copyright', 'automobile-hub'),
        'section' => 'automobile_hub_footer_section',
        'choices' => array(
            'Right' => __('Right','automobile-hub'),
            'Left' => __('Left','automobile-hub'),
            'Center' => __('Center','automobile-hub')
        ),
	) );

	// footer columns
	$wp_customize->add_setting('automobile_hub_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_footer_columns',array(
		'label'	=> __('Footer Widget Columns','automobile-hub'),
		'section'	=> 'automobile_hub_footer_section',
		'setting'	=> 'automobile_hub_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'automobile_hub_tp_footer_bg_color_option', array(
		'default' => '#151515',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'automobile-hub'),
		'description' => __('It will change the complete footer widget backgorund color.', 'automobile-hub'),
		'section' => 'automobile_hub_footer_section',
		'settings' => 'automobile_hub_tp_footer_bg_color_option',
	)));

	$wp_customize->add_setting('automobile_hub_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'automobile_hub_footer_widget_image',array(
       'label' => __('Footer Widget Background Image','automobile-hub'),
       'section' => 'automobile_hub_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('automobile_hub_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','automobile-hub'),
		'section'	=> 'automobile_hub_footer_section',
	    'setting'	=> 'automobile_hub_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'automobile_hub_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'automobile-hub'),
	    'section' => 'automobile_hub_footer_section',
	    'settings' => 'automobile_hub_footer_widget_title_color',
  	)));
  	
	$wp_customize->add_setting( 'automobile_hub_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'automobile-hub' ),
		'section'     => 'automobile_hub_footer_section',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_return_to_header',
	) ) );

	$wp_customize->add_setting('automobile_hub_return_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Automobile_Hub_Icon_Changer(
       $wp_customize,'automobile_hub_return_icon',array(
		'label'	=> __('Return to header Icon','automobile-hub'),
		'transport' => 'refresh',
		'section'	=> 'automobile_hub_footer_section',
		'type'		=> 'icon'
	)));

	//Mobile resposnsive
	$wp_customize->add_section('automobile_hub_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'automobile-hub'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'automobile-hub'),
		'priority' => 5,
		'panel' => 'automobile_hub_panel_id'
	) );
	$wp_customize->add_setting( 'automobile_hub_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'automobile-hub' ),
		'section'     => 'automobile_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'automobile_hub_slider_buttom_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_slider_buttom_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'automobile-hub' ),
		'section'     => 'automobile_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_slider_buttom_mob',
	) ) );
	$wp_customize->add_setting( 'automobile_hub_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'automobile-hub' ),
		'section'     => 'automobile_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_related_post_mob',
	) ) );

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('automobile_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'automobile-hub'),
        'description'   => __('This option work for scroll to top', 'automobile-hub'),
        'section' => 'automobile_hub_footer_section',
        'choices' => array(
            'Right' => __('Right','automobile-hub'),
            'Left' => __('Left','automobile-hub'),
            'Center' => __('Center','automobile-hub')
        ),
	) );
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	//site Title
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'automobile_hub_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'automobile_hub_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting( 'automobile_hub_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'automobile-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_site_title',
	) ) );

	// logo site title size
	$wp_customize->add_setting('automobile_hub_site_title_font_size',array(
		'default'	=> 30,
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','automobile-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'automobile_hub_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
		    'step'             => 1,
			'min'              => 0,
			'max'              => 30,
			),
	));

	$wp_customize->add_setting( 'automobile_hub_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'automobile-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'automobile_hub_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'automobile_hub_site_tagline', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'automobile-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('automobile_hub_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','automobile-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'automobile_hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
	));

	$wp_customize->add_setting( 'automobile_hub_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'automobile_hub_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'automobile-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'automobile_hub_logo_tagline_color',
  	)));

    $wp_customize->add_setting('automobile_hub_logo_width',array(
	   'default' => 80,
	   'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','automobile-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));
	$wp_customize->add_setting('automobile_hub_logo_settings',array(
      'default' => 'Different Line',
      'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
    $wp_customize->add_control('automobile_hub_logo_settings',array(
      'type' => 'radio',
      'label'     => __('Logo Layout Settings', 'automobile-hub'),
      'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'automobile-hub'),
      'section' => 'title_tagline',
      'choices' => array(
          'Different Line' => __('Different Line','automobile-hub'),
          'Same Line' => __('Same Line','automobile-hub')
      ),
	) );
	$wp_customize->add_setting('automobile_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_per_columns',array(
		'label'	=> __('Product Per Row','automobile-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('automobile_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'automobile_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('automobile_hub_product_per_page',array(
		'label'	=> __('Product Per Page','automobile-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'automobile_hub_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'automobile-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_product_sidebar',
	) ) );
	$wp_customize->add_setting('automobile_hub_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'automobile_hub_sanitize_choices'
	));
	$wp_customize->add_control('automobile_hub_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'automobile-hub'),
        'description'   => __('This option work for Archieve Products', 'automobile-hub'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','automobile-hub'),
            'right' => __('Right','automobile-hub'),
        ),
	) );
	$wp_customize->add_setting( 'automobile_hub_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Automobile_Hub_Toggle_Control( $wp_customize, 'automobile_hub_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'automobile-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_single_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'automobile_hub_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'automobile_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new automobile_hub_Toggle_Control( $wp_customize, 'automobile_hub_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'automobile-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'automobile_hub_related_product',
	) ) );

	
	//Page template settings
	$wp_customize->add_panel( 'automobile_hub_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'automobile-hub' ),
	    'description' => __( 'Description of what this panel does.', 'automobile-hub' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('automobile_hub_404_page_section',array(
		'title'         => __('404 Page', 'automobile-hub'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'automobile_hub_page_panel_id'
	) );

	$wp_customize->add_setting('automobile_hub_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_hub_edit_404_title',array(
		'label'	=> __('Edit Title','automobile-hub'),
		'section'=> 'automobile_hub_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('automobile_hub_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_edit_404_text',array(
		'label'	=> __('Edit Text','automobile-hub'),
		'section'=> 'automobile_hub_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('automobile_hub_no_result_section',array(
		'title'         => __('Search Results', 'automobile-hub'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'automobile_hub_page_panel_id'
	) );

	$wp_customize->add_setting('automobile_hub_edit_no_result_title',array(
		'default'=> __('Nothing Found','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_hub_edit_no_result_title',array(
		'label'	=> __('Edit Title','automobile-hub'),
		'section'=> 'automobile_hub_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('automobile_hub_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','automobile-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_hub_edit_no_result_text',array(
		'label'	=> __('Edit Text','automobile-hub'),
		'section'=> 'automobile_hub_no_result_section',
		'type'=> 'text'
	));

	 // Header Image Height
    $wp_customize->add_setting(
        'automobile_hub_header_image_height',
        array(
            'default'           => 350,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'automobile_hub_header_image_height',
        array(
            'label'       => esc_html__( 'Header Image Height', 'automobile-hub' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the height of the header image. Default is 350px.', 'automobile-hub' ),
            'input_attrs' => array(
                'min'  => 220,
                'max'  => 1000,
                'step' => 1,
            ),
        )
    );

    // Header Background Position
    $wp_customize->add_setting(
        'automobile_hub_header_background_position',
        array(
            'default'           => 'center',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'automobile_hub_header_background_position',
        array(
            'label'       => esc_html__( 'Header Background Position', 'automobile-hub' ),
            'section'     => 'header_image',
            'type'        => 'select',
            'choices'     => array(
                'top'    => esc_html__( 'Top', 'automobile-hub' ),
                'center' => esc_html__( 'Center', 'automobile-hub' ),
                'bottom' => esc_html__( 'Bottom', 'automobile-hub' ),
            ),
            'description' => esc_html__( 'Choose how you want to position the header image.', 'automobile-hub' ),
        )
    );

    // Header Image Parallax Effect
    $wp_customize->add_setting(
        'automobile_hub_header_background_attachment',
        array(
            'default'           => 1,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'automobile_hub_header_background_attachment',
        array(
            'label'       => esc_html__( 'Header Image Parallax', 'automobile-hub' ),
            'section'     => 'header_image',
            'type'        => 'checkbox',
            'description' => esc_html__( 'Add a parallax effect on page scroll.', 'automobile-hub' ),
        )
    );

}
add_action( 'customize_register', 'automobile_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Automobile Hub 1.0
 * @see automobile_hub_customize_register()
 *
 * @return void
 */
function automobile_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Automobile Hub 1.0
 * @see automobile_hub_customize_register()
 *
 * @return void
 */
function automobile_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'AUTOMOBILE_HUB_PRO_THEME_NAME' ) ) {
	define( 'AUTOMOBILE_HUB_PRO_THEME_NAME', esc_html__( 'Automobile Pro Theme', 'automobile-hub' ));
}
if ( ! defined( 'AUTOMOBILE_HUB_PRO_THEME_URL' ) ) {
	define( 'AUTOMOBILE_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/products/automobile-wordpress-theme'));
}
if ( ! defined( 'AUTOMOBILE_HUB_DOCS_URL' ) ) {
	define( 'AUTOMOBILE_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/automobile-hub-lite/'));
}

if ( ! defined( 'AUTOMOBILE_HUB_DEMO_TITLE' ) ) {
	define( 'AUTOMOBILE_HUB_DEMO_TITLE', esc_html__( 'Click to View Site', 'automobile-hub' ));
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Automobile_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Automobile_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Automobile_Hub_Customize_Section_Pro(
				$manager,
				'automobile_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => AUTOMOBILE_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'automobile-hub' ),
					'pro_url'  => esc_url( AUTOMOBILE_HUB_PRO_THEME_URL, 'automobile-hub' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Automobile_Hub_Customize_Section_Pro(
				$manager,
				'automobile_hub_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'automobile-hub' ),
					'pro_text' => esc_html__( 'Click Here', 'automobile-hub' ),
					'pro_url'  => esc_url( AUTOMOBILE_HUB_DOCS_URL, 'automobile-hub'),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new automobile_hub_Customize_Section_Pro(
				$manager,
				'automobile_hub_section_pro_demo',
				array(
					'priority'   => 9,
					'title'    => AUTOMOBILE_HUB_DEMO_TITLE,
					'pro_text' => esc_html__( 'View Site', 'automobile-hub' ),
					'pro_url'  => esc_url( home_url() ),
				)
			)
		);

	}
	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'automobile-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'automobile-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Automobile_Hub_Customize::get_instance();
