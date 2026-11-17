<?php

if (!defined('ABSPATH')) {
    exit;
}
wp_nav_menu(array(
    'container_id' => 'story-nav',
    'container_class' => 'story-nav',
    'theme_location' => 'story_nav',
    'container' => 'nav',
    'menu_class' => 'story-nav',
    'items_wrap' => '<ul>%3$s</ul>',
    'fallback_cb' => false
));