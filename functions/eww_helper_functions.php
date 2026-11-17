<?php
if (!defined('ABSPATH')) { exit; }

function eww_print_field( $field_name, $sub_field = false, $before = '', $after = '' ) {
    echo $before;

        if( !$sub_field ) {
            if( get_field( $field_name ) ) {
                echo get_field( $field_name );
            }
        } else {
            if( get_sub_field( $field_name ) ) {
                echo get_sub_field( $field_name );
            }
        }

    echo $after;
}

function eww_print_img ( $field_name, $sub_field = false, $before = '', $after = '' ) {
    $img_ID = '';

    if( !$sub_field ){
        $img_ID = get_field( $field_name );
    } else {
        $img_ID = get_sub_field( $field_name );
    }

    echo $before;

    echo wp_get_attachment_image( $img_ID, 'ewl-full', false, ["class" => "load-media-on-load", 'onload' => 'loadMediaonLoad(this)']);

    echo $after;
}