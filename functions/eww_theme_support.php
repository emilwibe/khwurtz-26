<?php
if (!defined('ABSPATH')) { exit; }

function ewl_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    remove_theme_support('wp-block-styles');
}

add_action( 'after_setup_theme', 'ewl_theme_support' );