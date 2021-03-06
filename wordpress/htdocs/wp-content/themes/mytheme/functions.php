<?php


//load stylesheet
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css',
    array(), false, 'all' );
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');


//load javascript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',
    'jquery', false, true );
    wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus

register_nav_menus(

    array(
        'top menu' => 'Top Menu Location',
        'mobile menu' => 'Mobile Menu Location',
        'footer menu' => 'Footer Menu Location',

    )
);

//Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

//Register Sidebars
function my_sidebars(){
    register_sidebar(
        array(
            'name'=>'Page SideBar',
            'id'=>'page-sidebar',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );

    register_sidebar(
        array(
            'name'=>'Blog SideBar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
    );

}
add_action('widgets_init', 'my_sidebars');

function my_first_post_type(){

    $args = array(
        'labels' => array(
            'name'=>'Cars',
            'singular_name'=>'Car',
        ),
        'hierarchical'=>true,
        'public'=>true,
        'has_archive'=>true,
        'menu_icon'=>'dashicons-car',
        'supports'=> array('title', 'editor', 'thumbnail', 'custom-fields'),

    );

    register_post_type('cars',$args);

}
add_action('init', 'my_first_post_type');

function my_first_taxonomy(){
    $args = array(
        'labels' => array(
            'name'=>'Brands',
            'singular_name'=>'Brand',
        ),
        'hierarchical'=>true,
        'public'=>true,
    );

    register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');