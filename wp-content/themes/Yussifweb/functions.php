<?php

include 'opt/ReduxCore/framework.php'; 
include 'opt/sample/r-config.php'; 

function r_supports(){
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-logo');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['audio', 'video']);
}

add_action('after_setup_theme', 'r_supports');

function r_sidebar(){
register_sidebar([
    'id'   => 1,
    'name' => 'Top Sidebar',
    'description' => 'Top Sidebar'
]);

register_sidebar([
    'id'   => 2,
    'name' => 'Left Sidebar',
    'description' => 'Left Sidebar',
    'before_title' => '<h1>',
    'after_title' => '</h1>'
]);
};

add_action('widget_init', 'r_sidebar');

register_post_type('one', [
    'public' => true,
    'labels' => [
        'name' => 'Team',
        'add_new' => 'New Member',
        'all_items' => 'All Members',
        'add_new_item' => 'Add New Member',
        'featured_image' => 'Member Image',
        'set_featured_image' => 'Add Member Image'
    ],

    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-admin-users',
    'menu_position' => 1
]);

register_nav_menus([
    'one' => 'Top Menu',
    'two' => 'Footer Menu'
]);

?>

<?php

function yussifweb(){
    echo "This Item Doesn't  exist";
};

?>