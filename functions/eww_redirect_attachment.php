<?php
if (!defined('ABSPATH')) { exit; }

// Redirect the attachment pages to the file itself for SEO reasons.
function ewl_redirect_attachment_page() {
    if ( is_attachment() ) {
        global $post;
        if ( is_a( $post, 'WP_Post' ) ) {
            $redirect = esc_url( wp_get_attachment_url( $post->ID ) );
            if ( $redirect && wp_safe_redirect( $redirect, 301 ) ) {
                exit;
            }
        }
    }
}
add_action( 'template_redirect', 'ewl_redirect_attachment_page' );