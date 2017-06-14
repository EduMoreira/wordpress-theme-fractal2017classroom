<?php
    require "settings.php";
    /* Add Bootstrap, FontAwesome & JQuery */
    function addDependencies () {
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '2.2');
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', "https://code.jquery.com/jquery-2.2.0.min.js", array(), '2.2.0', true);
        wp_enqueue_script('website-js', get_template_directory_uri() . '/js/website.min.js', array('jquery'), '1.6', true);
    }
    /*Mask WordPress*/
    function mascara_cadastro_cliente(){
    if( is_page('cadastro-cliente') )
        wp_enqueue_script('masked-input', 'http://SEU_SITE/wp-content/themes/SEU_TEMA'.'/js/jquery.maskedinput.min.js', array('jquery'));
    }
    add_action('wp_enqueue_scripts', 'mascara_cadastro_cliente');
    /*Custom WordPress Login Logo*/
    function custom_login_logo() {
        echo "<style type=\"text/css\">
            body.login div#login h1 a {
                background-image: url(".get_bloginfo('template_directory')."/img/logo-black.svg);
                -webkit-background-size: auto;
                background-size: auto;
                background-color: transparent;
                margin: 0 0 25px;
                width: 320px;
            }
        </style>";
    }
    add_action( 'login_enqueue_scripts', 'custom_login_logo' );
    /* Creates Aulas */
    add_action('init', 'type_post_classroom'); 
    function type_post_classroom() { 
    $labels = array(
        'name' => _x('Aulas', 'post type general name'),
        'singular_name' => _x('Aula', 'post type singular name'),
        'add_new' => _x('Novo', 'Novo item'),
        'add_new_item' => __('Novo'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo'),
        'view_item' => __('Ver'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Aulas',
    ); 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-welcome-widgets-menus',	
        'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
    ); 
    register_post_type( 'aula' , $args );
    flush_rewrite_rules();
    }
    /* Creates Category */
    register_taxonomy(
    "categorias",
        array(
            "aula",
        ), 
        array(            
            "label" => "Categorias", 
            "singular_label" => "Categoria", 
            "rewrite" => true,
            "hierarchical" => true
        )
    );
    /* Change login page logo link */
    function changeLoginLogoUrl() {
        return home_url();
    }
    /* Change login page logo title text */
    function changeLoginLogoUrlTitle() {
        return 'Fractal Reality Academy | Classroom';
    }
    /* Customize admin menu */
    function customizeMenu () {
        remove_menu_page('edit.php');
        remove_menu_page( 'edit-comments.php' );
    }
    /* Create Menus */
    register_nav_menus(array(
        'home-menu' => __('Menu Home', 'publicitymidias'),
        'inner-menu' => __('Menu Interno', 'publicitymidias'),
        'side-menu' => __('Menu Vertical', 'publicitymidias'),
    ));
    /* Theme Panel */
        function add_theme_menu_item()
    {
        add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    }
    function themeSetup() {
        /* Scripts */
        add_action ('wp_enqueue_scripts', 'addDependencies');
        /* Customize admin login page */
        add_action ('admin_menu', 'customizeMenu'); 
        add_filter ('login_headerurl', 'changeLoginLogoUrl');
        add_filter ('login_headertitle', 'changeLoginLogoUrlTitle');
        /* Hide admin top bar */
        add_filter('show_admin_bar', '__return_false');
        /* Turn-off feeds */
        remove_action ('do_feed_rdf', 'do_feed_rdf', 10, 1);
        remove_action ('do_feed_rss', 'do_feed_rss', 10, 1);
        remove_action ('do_feed_rss2', 'do_feed_rss2', 10, 1);
        remove_action ('do_feed_atom', 'do_feed_atom', 10, 1);
        /* Remove emoji detection scripts and emoji styles */
        remove_action ('wp_head', 'print_emoji_detection_script', 7);
        remove_action ('admin_print_scripts', 'print_emoji_detection_script');
        remove_action ('wp_print_styles', 'print_emoji_styles');
        remove_action ('admin_print_styles', 'print_emoji_styles');
        /* Remove feeds links from header */
        remove_action ('wp_head', 'feed_links_extra', 3);
        remove_action ('wp_head', 'feed_links', 2);
        /* Remove RSD, WLW Manifest, shortlink & generator from header */
        remove_action ('wp_head', 'rsd_link');
        remove_action ('wp_head', 'wlwmanifest_link');
        remove_action ('wp_head', 'wp_shortlink_wp_head');
        remove_action ('wp_head', 'wp_generator');
        remove_action('wp_head', 'rel_canonical');
        /* Remove WPML generator tag from header */
        if ( ! empty ( $GLOBALS['sitepress'] ) ) {
            add_action( 'wp_head', function()
        {
        remove_action(
            current_filter(),
            array ( $GLOBALS['sitepress'], 'meta_generator_tag' )
        );
    },
    0
    );
    }
    }
    add_action('admin_menu', 'add_theme_menu_item');
    add_action('admin_init', 'display_theme_panel_fields');
    add_action('after_setup_theme', 'themeSetup');
?>