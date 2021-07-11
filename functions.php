<?php 
/*=================================
 Coomon
==================================*/ 
function dbuds_essentials(){


    // theme supports
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    // shortcod eworks on widgets
    //add_filter('widget_text', 'do_shortcode');

    //menu register
    register_nav_menus(array(
        'mainMenu' => 'Header Left Menu',
    ));
	  

    // Register Post Type
    register_post_type( 'dbuds', array(
        'labels' => array(
            'name' => 'Dbuds',
            'add_new_item' => 'Add Your Post'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'menu_icon' => 'dashicons-universal-access-alt'
    ) );




    // thumbnails size
    add_image_size( 'extra-large', 3000, 3000, true );

    
    
}
add_action('after_setup_theme', 'dbuds_essentials');


// taxonnomy for post
function dbuds_taxo(){
    register_taxonomy(
        'protfolio-cat',
        'protfolio',
        array(
            'hierarchical' => true,
            'lable' => 'Protfolio Category',
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'protfolio-category',     
                'with_front' => true,
            )
        )
    );

}
add_action('init', 'dbuds_taxo');


/*=================================
 style and script register
==================================*/ 
function dbuds_assets(){
    
    // style add
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.min.css?v='.time());
 
    //register js
    wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js', array('jquery'), time(), true);


}
add_action('wp_enqueue_scripts', 'dbuds_assets');


// svg image formate support
function cc_mime_types($mimes) { $mimes['svg'] = 'image/svg+xml'; return $mimes; } add_filter('upload_mimes', 'cc_mime_types');


require get_parent_theme_file_path('/inc/acf-mb.php');
require get_parent_theme_file_path('/inc/theme-options.php');
require get_parent_theme_file_path('/inc/widgets.php');
require get_parent_theme_file_path('/inc/customizer.php');
// require get_parent_theme_file_path('/inc/class-tgm-plugin-activation.php');
// require get_parent_theme_file_path('/inc/requir-plugin.php');

//acf hide
//add_filter('acf/settings/show_admin', '__return_false');



