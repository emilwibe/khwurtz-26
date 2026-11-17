<?php
if (!defined('ABSPATH')) { exit; }

add_filter('attachment_fields_to_edit', 'eww_attachment_custom_fields', 10, 2);
function eww_attachment_custom_fields($fields, $post) {

    $fields['eww_additional_info'] = array(
        'label' => 'Additional info',
        'input' => 'textarea',
        'value' => get_post_meta($post->ID, 'eww_additional_info', true),
        'helps' => 'Additional info...'
    );

    return $fields;
}

add_filter('attachment_fields_to_save', 'eww_attachment_custom_fields_save', 10, 2);

function eww_attachment_custom_fields_save($post, $attachment) {

    if (isset($attachment['eww_additional_info'])) {
        update_post_meta(
            $post['ID'],
            'eww_additional_info',
            sanitize_text_field($attachment['eww_additional_info'])
        );
    }

    return $post;
}