<?php

include_once ("opciones.php");


define("TEMPPATH",get_bloginfo("stylesheet_directory"));
define("IMAGES",TEMPPATH."/img/");
define("CSS",TEMPPATH."/css/");

function add_custum_css()
{
    {
        wp_register_style('main',get_stylesheet_directory_uri().'/css/main.css', array(),null, 'all');
        wp_enqueue_style('main',get_stylesheet_directory_uri().'/css/main.css', array(),null, 'all');
        wp_enqueue_style('style',get_stylesheet_uri());

    }
}
function get_user_info($display_name= null, $user_email=null, $user_first_name = null, $user_lastname = null , $user_id=null)
{
    $current_user = wp_get_current_user();
    echo $current_user->$display_name;
    echo $current_user->strval($user_email);

}

add_action('wp_enqueue_scripts','add_custum_css');
add_action('init','add_custum_css');

add_theme_support("nav-menus");
if(function_exists("register_nav_menus"))
{
    register_nav_menus(array(
        "Main"=>"main nav",
        "Footer"=>"footer nav",
        "Side"=>"side nav"

    ));

}

function arphabet_widgets_init() {
    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function get_gravatar($email,$s,$d,$r)
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    return $url;
}

/* post thumbnail support */

add_theme_support("post-thumbnails");


function custum_excerpt()
{
    return 150;
}

add_filter('excerpt_length','custum_excerpt');


function setup_theme()
{
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail',180,120,true);
    add_image_size('medium-thumbnail',240,180,true);
    add_image_size('banner-thumbnail',540,351,true);
}


add_action('after_setup_theme','setup_theme');

?>
