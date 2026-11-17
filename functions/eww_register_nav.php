<?php
if (!defined('ABSPATH')) { exit; }
function ewl_register_nav_menu() {
        register_nav_menus(array(
            'primary'  => 'Primary',
            'story_nav' => 'Stories Nav'
        ));
    }
    add_action('after_setup_theme', 'ewl_register_nav_menu', 0);
