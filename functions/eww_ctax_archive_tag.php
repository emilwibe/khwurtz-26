<?php
if (!defined('ABSPATH')) { exit; }
function eww_register_archive_tag_taxonomy() {

    $labels = array(
        'name'              => 'Archive tags',
        'singular_name'     => 'Archive tag',
        'search_items'      => 'Search archive tags',
        'popular_items'     => 'Popular archive tags',
        'all_items'         => 'All archive tags',
        'edit_item'         => 'Edit archive tag',
        'update_item'       => 'Update archive tag',
        'add_new_item'      => 'Add new archive tag',
        'new_item_name'     => 'New archive tag',
        'menu_name'         => 'Archive tags',
    );

    register_taxonomy('archive-tag', array('attachment'), array(
        'labels'            => $labels,
        'hierarchical'      => false,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => false,
        'query_var'         => false,
    ));

}
add_action('init', 'eww_register_archive_tag_taxonomy');