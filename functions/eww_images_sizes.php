<?php
if (!defined('ABSPATH')) {
    exit;
}


function eww_images_sizes() {

    add_image_size('ew-1360', 1360);
    add_image_size('ew-1600', 1600);
    add_image_size('ew-2040', 2040);

}

add_action('after_setup_theme', 'eww_images_sizes');
