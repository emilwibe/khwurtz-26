<?php
if (!defined('ABSPATH')) { exit; }

// HELPER FUNCTIONS
get_template_part( 'functions/eww_helper_functions' );

// THEME SUPPORT
get_template_part( 'functions/eww_theme_support' );

// DISABLE FEATURES
get_template_part( 'functions/eww_disable_feat' );

// ENQUEUES
get_template_part( 'functions/eww_enqueues' );

// REGISTER NAV MENUS
get_template_part( 'functions/eww_register_nav' );

// ARCHIVE TAGS
get_template_part( 'functions/eww_ctax_archive_tag' );

// IMAGES SIZES
get_template_part( 'functions/eww_images_sizes' );

// REDIRECT ATTACHMENT PAGES
get_template_part( 'functions/eww_redirect_attachment' );

// UTILITIES
get_template_part( 'functions/eww_util' );

// WIDGETS
get_template_part( 'functions/eww_widgets' );

// CUSTOM POST TYPE
get_template_part( 'functions/eww_cpt_story' );

// TinyMCE
get_template_part( 'functions/eww_tinyMCE' );
get_template_part( 'functions/eww_tinymce_buttons' );

get_template_part( 'functions/eww_attachment_custom_field' );

add_action('wp', function () {
    //error_log('IS 404: ' . (is_404() ? 'YES' : 'NO'));
});