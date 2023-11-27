<?php

function taxonomyuse_cases()
{
    register_taxonomy('taxonomyuse_cases', array('cases'),
        array(
            'labels' => array(
                'name' => __('Category', 'textdomain'),
                'singular_name' => __('Category', 'textdomain'),
                'search_items' => __('Search Category', 'textdomain'),
                'all_items' => __('All Category', 'textdomain'),
                'edit_item' => __('Edit Category', 'textdomain'),
                'update_item' => __('Update Category', 'textdomain'),
                'add_new_item' => __('Add New Category', 'textdomain'),
                'new_item_name' => __('New Category', 'textdomain'),
                'menu_name' => __('Category', 'textdomain'),
            ),
            'hierarchical' => true,
            'rewrite' => array('slug' => 'taxonomyuse_cases'),
            'show_admin_column'     => true,
            'show_in_rest' => true
        ));
}
add_action('init', 'taxonomyuse_cases');