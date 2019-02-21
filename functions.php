<?php 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function load_assets()
{
        //load bootstrap
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
        //load icons
    wp_enqueue_style('fontawesome_css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
        //load animate.css
    wp_enqueue_style('animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
        //load yeseva
    wp_enqueue_style('yeseva_font', 'https://fonts.googleapis.com/css?family=Yeseva+One');
        //load crimson
    wp_enqueue_style('crimson_font', 'https://fonts.googleapis.com/css?family=Crimson+Text:400,700i');
        //load style.css
    wp_enqueue_style('style', get_stylesheet_uri());
        //load mdbootstrap
    wp_enqueue_style('mdb.min', get_stylesheet_uri());
        //load jquery
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
        //load bootstrap js
    wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'); 
        //load slider   
    wp_enqueue_style( 'slider_css', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css' );    
        //load slider js
    wp_enqueue_script( 'slider_js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js'); 
        //load scripts js
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/scripts.js');
        //load Top
    wp_enqueue_script( 'top_js', get_template_directory_uri() . '/assets/js/top.js');
}

add_action('wp_enqueue_scripts','load_assets');

add_theme_support( 'post-thumbnails' );

//Load nav menu
register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ), ) ); 

//funcion para el slider
function create_main_slider() {
        $args = array(
            'labels' => array(
                'name' => __( 'Main Slider' ),
                'singular_name' => __( 'Main Slider' ),
                'menu_name' => __( 'Main Slider' ),
                'name_admin_bar' => __( 'Main Slider' ),
                'add_new' => __('Add new'),
                'add_new_item' => __('Add New Slider'),
                'new_item' => __('New Slider'),
                'edit_item' => __('Edit Slider'),
                'view_item' => __('View Sliders'),
                'all_items' => __('All Sliders'),
                'search_items' => __('Search Slider'),
                'parent_item_color' => __('Parent Sliders:'),
                'not_found' => __('No sliders found.'),
                'not_found_in_trash' => __('No sliders found in Trash')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'capability_type' => 'post',
            'rewrite' => array("slug" => "main slider")
        );

        register_post_type('main-slider', $args);
    }
    
    add_action( 'init', 'create_main_slider' );

?>