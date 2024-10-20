<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    function automobile_hub_import_demo_content() {
    // Path to the WooCommerce plugin file
    $plugin = 'woocommerce/woocommerce.php';
    
    // Check if WooCommerce is installed and not already active
    if (file_exists(WP_PLUGIN_DIR . '/' . $plugin) && !is_plugin_active($plugin)) {
        activate_plugin($plugin);
    }

     }

    // Call the import function
    automobile_hub_import_demo_content();

    // ------- Create Nav Menu --------
$automobile_hub_menuname = 'Main Menus';
$automobile_hub_bpmenulocation = 'primary-menu';
$automobile_hub_menu_exists = wp_get_nav_menu_object($automobile_hub_menuname);

if (!$automobile_hub_menu_exists) {
    $automobile_hub_menu_id = wp_create_nav_menu($automobile_hub_menuname);

    // Create Home Page
    $automobile_hub_home_title = 'Home';
    $automobile_hub_home = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $automobile_hub_home_id = wp_insert_post($automobile_hub_home);

    // Assign Home Page Template
    add_post_meta($automobile_hub_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $automobile_hub_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Home', 'automobile-hub'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $automobile_hub_about_title = 'About Us';
    $automobile_hub_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_about = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_about_title,
        'post_content' => $automobile_hub_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $automobile_hub_about_id = wp_insert_post($automobile_hub_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'automobile-hub'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $automobile_hub_services_title = 'Services';
    $automobile_hub_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_services = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_services_title,
        'post_content' => $automobile_hub_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $automobile_hub_services_id = wp_insert_post($automobile_hub_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Services', 'automobile-hub'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $automobile_hub_pages_title = 'Pages';
    $automobile_hub_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $automobile_hub_pages = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_pages_title,
        'post_content' => $automobile_hub_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $automobile_hub_pages_id = wp_insert_post($automobile_hub_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'automobile-hub'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $automobile_hub_contact_title = 'Contact';
    $automobile_hub_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_contact = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_contact_title,
        'post_content' => $automobile_hub_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $automobile_hub_contact_id = wp_insert_post($automobile_hub_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'automobile-hub'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($automobile_hub_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$automobile_hub_bpmenulocation] = $automobile_hub_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('automobile_hub_mail_text', 'EMAIL ADDRESS');
        set_theme_mod('automobile_hub_mail', 'automobile22@gmail.com');
        set_theme_mod('automobile_hub_mail_icon', 'fas fa-envelope-open');

        set_theme_mod('automobile_hub_call_text', 'PHONE NO');
        set_theme_mod('automobile_hub_call', '1234567890');
        set_theme_mod('automobile_hub_call_icon', 'fas fa-phone');

        set_theme_mod('automobile_hub_cart_option', true);
        set_theme_mod('automobile_hub_cart_icon', 'fas fa-shopping-basket');

        set_theme_mod('automobile_hub_header_fb_new_tab', true);
        set_theme_mod('automobile_hub_facebook_url', '#');
        set_theme_mod('automobile_hub_facebook_icon', 'fab fa-facebook-f');

        set_theme_mod('automobile_hub_header_twt_new_tab', true);
        set_theme_mod('automobile_hub_twitter_url', '#');
        set_theme_mod('automobile_hub_twitter_icon', 'fab fa-twitter');

        set_theme_mod('automobile_hub_header_ins_new_tab', true);
        set_theme_mod('automobile_hub_instagram_url', '#');
        set_theme_mod('automobile_hub_instagram_icon', 'fab fa-instagram');

        set_theme_mod('automobile_hub_header_ut_new_tab', true);
        set_theme_mod('automobile_hub_youtube_url', '#');
        set_theme_mod('automobile_hub_youtube_icon', 'fab fa-youtube');

        set_theme_mod('automobile_hub_header_pint_new_tab', true);
        set_theme_mod('automobile_hub_pint_url', '#');
        set_theme_mod('automobile_hub_pint_icon', 'fab fa-pinterest');

        // Slider Section
        set_theme_mod('automobile_hub_slider_arrows', true);
        set_theme_mod('automobile_hub_slider_text', 'LOREM IPSUM IS SIMPLY');
        set_theme_mod('automobile_hub_slider_icon', 'fas fa-hand-point-right');

        for ($i = 1; $i <= 4; $i++) {
            $automobile_hub_title = 'LOREM IPSUM IS PRINTING AND';
            $automobile_hub_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($automobile_hub_title),
                'post_content'  => $automobile_hub_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('automobile_hub_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img' . $i . '.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

        // About Section
        set_theme_mod('automobile_hub_about_show_hide', true);
        set_theme_mod('automobile_hub_about_tittle', 'LOREM IPSUM IS SIMPLY');
        set_theme_mod('automobile_hub_about_icon', 'fas fa-hand-point-right');

        // Create About page and set the featured image
        $automobile_hub_abt_title = 'LOREM IPSUM IS PRINTING AND';
        $automobile_hub_abt_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages.<br> ';

        $my_post = array(
            'post_title'    => wp_strip_all_tags($automobile_hub_abt_title),
            'post_content'  => $automobile_hub_abt_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );

        // Insert the post into the database
        $post_id = wp_insert_post($my_post);

        if ($post_id) {
            // Set the theme mod for the About page
            set_theme_mod('automobile_hub_about_page', $post_id);

            // Sideload image and set as the featured image
            $image_url = get_template_directory_uri() . '/assets/images/about-img.png';
            $image_id = media_sideload_image($image_url, $post_id, null, 'id');

            if (!is_wp_error($image_id)) {
                set_post_thumbnail($post_id, $image_id);
            }
        }

    }




?>