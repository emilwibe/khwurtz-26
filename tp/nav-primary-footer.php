<?php if (!defined('ABSPATH')) {
    exit;
}
wp_nav_menu(array(
    'container_id' => 'nav-primary-footer',
    'container_class' => 'nav-primary nav-primary-footer',
    'theme_location' => 'primary',
    'container' => 'nav',
    'items_wrap' => '<ul>%3$s</ul>'
));