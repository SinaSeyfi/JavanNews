<?php
function video_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => 'ویدیو ها',
        'singular_name' => 'ویدیو ها',
        'menu_name' => 'ویدیو',
        'parent_item_colon' => 5,
        'all_items' => 'همه ویدیوها',
        'view_item' => 'نمایش ویدیو',
        'add_new_item' => 'افزودن ویدیو',
        'add_new' => 'افزودن جدید',
        'edit_item' => _x('ویرایش', 'twentythirteen'),
        'update_item' => _x('به روزرسانی', 'twentythirteen'),
        'search_items' => _x('جستجو', 'twentythirteen'),
        'not_found' => _x('پیدا نشد', 'twentythirteen'),
        'not_found_in_trash' => _x('در زباله پیدا نشد', 'twentythirteen'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => 'ویدیو ها',
        'description' => 'ویدیو ها',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'comments'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => false,
        'menu_icon'     => 'dashicons-video-alt2',
        'taxonomies'         => array( 'video_category'),

    );

// Registering your Custom Post Type
    register_post_type('video', $args);

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action('init', 'video_post_type');




/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('video_category', 'video', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name'          => __( 'دسته‌ها' ),
            'singular_name'          => __( 'دسته بندی پست ها' ),
            'search_items'          => __( 'جستجو دسته' ),
            'all_items'          => __( 'تمام دسته ها' ),
            'parent_item'          => __( 'زیر دسته' ),
            'parent_item_colon'          => __( 'parent gener:' ),
            'edit_item'          => __( 'ویرایش دسته' ),
            'update_item'          => __( 'بروزرسانی دسته' ),
            'add_new_item'          => __( 'افزودن دسته جدید' ),
            'show_admin_column' => true,
            'new_item_name'          => __( 'نام دسته جدید' ),
            'menu_name'          => __( 'دسته‌ها' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'video_category', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'show_admin_column' => true,
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
        'show_admin_column' => true,

    ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );


