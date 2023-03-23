<?php
add_action( 'after_setup_theme', 'pie_fn_setup', 50 );

function pie_fn_setup(){
    add_action( 'wp_enqueue_scripts', 'pie_scripts' );
    add_action('wp_enqueue_scripts', 'pie_styles');

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 300, 300, true ); 									// Normal post thumbnails

    add_image_size( 'pie_fn_thumb-1000-1000', 1000, 1000, true);		// Portfolio Categories
    add_image_size( 'pie_fn_thumb-1000-9999', 1000, 9999, false);		// Portfolio Page
    add_image_size( 'pie_fn_thumb-300-300', 300, 300, true);			// Clients, Commentary

    // CONSTANT
    $my_theme 		= wp_get_theme( 'pie' );
    $version		= '1.0.0';
    if ( $my_theme->exists() ){
        $version 	= (string)$my_theme->get( 'Version' );
    }
    $version		= 'ver_'.$version;
    define('PIE_VERSION', $version);
    define('PIE_THEME_URL', get_template_directory_uri());
    
}

// =============================================================
//     ENQUEUE SCRIPTS
// =============================================================
function pie_scripts() {
    wp_enqueue_script('pie-fn-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), PIE_VERSION, TRUE);
    wp_enqueue_script('pie-fn-jsa', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), PIE_VERSION, TRUE);
    wp_enqueue_script('pie-fn-init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), PIE_VERSION, TRUE);

    wp_enqueue_script('pie-fn-lightgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js', array('jquery'), PIE_VERSION, TRUE);

    wp_enqueue_script('pie-fn-lightgallery2', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/zoom/lg-zoom.min.js', array('jquery'), PIE_VERSION, TRUE);

    wp_enqueue_script('pie-fn-lightgallery3', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js', array('jquery'), PIE_VERSION, TRUE);

    wp_enqueue_script('pie-fn-lightgallery4', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/video/lg-video.min.js', array('jquery'), PIE_VERSION, TRUE);

}



// ===========================================================
//     ENQUEUE STYLES
// ===========================================================
function pie_styles(){
    wp_enqueue_style('pie-fn-base', get_template_directory_uri().'/assets/css/base.css', array(), PIE_VERSION, 'all');
    wp_enqueue_style('pie-fn-plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), PIE_VERSION, 'all');
    wp_enqueue_style('pie-fn-skeleton', get_template_directory_uri().'/assets/css/skeleton.css', array(), PIE_VERSION, 'all');
    wp_enqueue_style('fontello', get_template_directory_uri().'/assets/css/fontello.css', array(), PIE_VERSION, 'all');
    wp_enqueue_style('pie-style', get_template_directory_uri().'/assets/css/style.css', array(), PIE_VERSION, 'all');

    wp_enqueue_style('pie-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), PIE_VERSION, 'all');
}



// =============================================================
//     EXPORT 
// =============================================================
if(!function_exists('load_my_script')){
    function load_my_script() {
        global $post;
        $deps = array('jquery');
        $version= '1.0'; 
        $in_footer = true;
        $page = get_the_title();
        wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/assets/js/my-script.js', $deps, $version, $in_footer);
        wp_localize_script('my-script', 'my_script_vars', array(
                'pageTitle' => $page
            )
        );
    }
}
add_action('wp_enqueue_scripts', 'load_my_script');


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

add_theme_support('automatic-feed-links');