<?php
function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/style.css');

    if (is_singular('practice-note')) {
        wp_enqueue_script('single-practice-note-js', get_template_directory_uri() . '/dist/single-practice-note.bundle.js', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');


/**
 * Register a custom post type.
 *
 * @param string $post_type The post type key.
 * @param string $singular_name The singular name of the post type.
 * @param string $plural_name The plural name of the post type.
 * @param array $supports The features the post type supports.
 */
function register_custom_post_type($post_type, $singular_name, $plural_name, $supports = array('title', 'editor', 'thumbnail')) {
    // $plural_nameが空の場合、$singular_nameに's'を追加して複数形にする
    if (empty($plural_name)) {
        $plural_name = $singular_name . 's';
    }

    $labels = array(
        'name' => _x($plural_name, 'Post Type General Name', 'textdomain'),
        'singular_name' => _x($singular_name, 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __($plural_name, 'textdomain'),
        'name_admin_bar' => __($singular_name, 'textdomain'),
        'archives' => __($singular_name . ' Archives', 'textdomain'),
        'attributes' => __($singular_name . ' Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent ' . $singular_name . ':', 'textdomain'),
        'all_items' => __('All ' . $plural_name, 'textdomain'),
        'add_new_item' => __('Add New ' . $singular_name, 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New ' . $singular_name, 'textdomain'),
        'edit_item' => __('Edit ' . $singular_name, 'textdomain'),
        'update_item' => __('Update ' . $singular_name, 'textdomain'),
        'view_item' => __('View ' . $singular_name, 'textdomain'),
        'view_items' => __('View ' . $plural_name, 'textdomain'),
        'search_items' => __('Search ' . $singular_name, 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image' => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item' => __('Insert into ' . $singular_name, 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this ' . $singular_name, 'textdomain'),
        'items_list' => __($plural_name . ' list', 'textdomain'),
        'items_list_navigation' => __($plural_name . ' list navigation', 'textdomain'),
        'filter_items_list' => __('Filter ' . $plural_name . ' list', 'textdomain'),
    );

    $args = array(
        'label' => __($singular_name, 'textdomain'),
        'description' => __($singular_name . ' information pages.', 'textdomain'),
        'labels' => $labels,
        'supports' => $supports,
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    register_post_type($post_type, $args);
}

/**
 * Register custom post types.
 */
function my_custom_post_types() {
    register_custom_post_type('practice-note', '練習帳', '練習帳');
}
add_action('init', 'my_custom_post_types');
?>
