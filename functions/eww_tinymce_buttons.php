<?php
if (!defined('ABSPATH')) { exit; }

function ewl_tinymce_button () {
    add_filter('mce_external_plugins', 'add_custom_tinymce_plugin');
    add_filter('mce_buttons', 'register_custom_tinymce_button');

    echo '<style>
        .mce-toolbar .mce-ico.mce-i-column_button {
            width: 18px;
            height: 18px;
            background-color: #ffebe1!important; /* Rødlig farve – tilpas som ønsket */
            border-radius: 2px;
            padding: 0;
        }
    </style>';
}

add_action('admin_head', 'ewl_tinymce_button');

function add_custom_tinymce_plugin($plugin_array) {
    $plugin_array['column_button'] = get_template_directory_uri() . '/dist/js/mce-button.js';
    return $plugin_array;
}

function register_custom_tinymce_button($buttons) {
    array_push($buttons, 'column_button');
    return $buttons;
}