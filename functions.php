<?php
global $post;

function excerpt($length) {
    return 25;
}
function more($more) {
    return '...';
}
add_filter('excerpt_more', 'more');
add_filter('excerpt_length', 'excerpt');


function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => ('منو بالا'),
            'footer-menu' => ('منو پایین'),
            'footer-menu1' => ('منو فوتر ستون اول'),
            'footer-menu2' => ('منو فوتر ستون دوم'),
            'footer-menu3' => ('منو فوتر ستون سوم'),
        )
    );
}

add_action('init', 'register_my_menus');


add_theme_support('post-thumbnails');


function switch_on_comments_automatically()
{
    global $wpdb;
    $wpdb->query($wpdb->prepare("UPDATE $wpdb->posts SET comment_status = 'open'")); // Switch comments on automatically
}

add_action('admin_enqueue_scripts', 'my_admin_style');
function my_admin_style()
{
    wp_enqueue_style('admin-style', get_stylesheet_directory_uri() . '/assets/css/admin-style.css');
}


add_action('admin_enqueue_scripts', 'my_admin_js');

function my_admin_js()
{
    wp_enqueue_script('admin-js', get_stylesheet_directory_uri() . '/assets/js/admin-js.js');
}


function taxonomy_rewrite_fix($wp_rewrite)
{
    $r = array();
    foreach ($wp_rewrite->rules as $k => $v) {
        $r[$k] = str_replace('catv=$matches[1]&paged=', 'catv=$matches[1]&page=', $v);
    }
    $wp_rewrite->rules = $r;
}

add_filter('generate_rewrite_rules', 'taxonomy_rewrite_fix');

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');



function enable_comments_custom_post_type() {
    add_post_type_support( 'video', 'comments' );
}
add_action( 'init', 'enable_comments_custom_post_type', 11 );

include "incload/codestar/codestar-framework.php";
include "incload/functions/settings_panel.php";
include "incload/functions/method.php";
include "incload/functions/metabox-news.php";
include "incload/functions/metabox-video.php";
include "incload/functions/sidebar-reg.php";
include "incload/widgets/widget-tabs.php";
include "incload/widgets/widget-big.php";
include "incload/widgets/widget-tabligh.php";
include "incload/widgets/widget-category.php";
include "incload/widgets/wiedget-tmb.php";
include "incload/widgets/widget-tmb-video.php";
include "incload/functions/navigation.php";
include "incload/functions/post-type-video.php";
//include "incload/functions/jdf.php";


function learning(){
    $rss = new DOMDocument();
    $rss->load('https://codeato.ir/category/programming-languages/feed/');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = [
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        ];
        array_push($feed, $item);
        $posts[] = $item;
    }
    $laar = '<div style="display: inline-block;">';
    for ($i=0; sizeof($posts) > $i; $i++){
        $laar .= '<strong><a target="_blank" href="' . $posts[$i]['link'] . '" title="' . $posts[$i]['title'] . '">' . $posts[$i]['title'] . '</a></strong>';
    }
    $laar .= '</div>';
    return $laar;
}
