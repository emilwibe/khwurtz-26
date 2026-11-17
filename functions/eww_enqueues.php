<?php
if (!defined('ABSPATH')) { exit; }

add_action( 'wp_enqueue_scripts', 'ewl_enqueues' );

function ewl_enqueues() {
    if( is_user_logged_in() ) {
        wp_enqueue_style('core-dev-styles', get_template_directory_uri() . '/dist/css/core.dev.css', [], time() );
    } else {
        wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.min.css', [], time() );
    }

    wp_enqueue_script('core-scripts-footer', get_template_directory_uri() . '/dist/js/scripts-footer.js', [], time(), true);

    wp_dequeue_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library' );

	wp_dequeue_style( 'wp-block-library-theme' );
	wp_deregister_style( 'wp-block-library-theme' );
}

// EDITOR STYLES

function ewl_editor_styles() {
	add_editor_style( 'dist/css/editor-styles.css' );
}

add_action( 'after_setup_theme', 'ewl_editor_styles' );

add_filter('mce_css', 't5_fresh_editor_style');

/**
 * Adds a parameter of the last modified time to all editor stylesheets.
 *
 * @wp-hook mce_css
 * @param  string $css Comma separated stylesheet URIs
 * @return string
 */
function t5_fresh_editor_style($css) {
    global $editor_styles;

    if (empty($css) or empty($editor_styles)) {
        return $css;
    }

    // Modified copy of _WP_Editors::editor_settings()
    $mce_css   = array();
    $style_uri = get_stylesheet_directory_uri();
    $style_dir = get_stylesheet_directory();

    if (is_child_theme()) {
        $template_uri = get_template_directory_uri();
        $template_dir = get_template_directory();

        foreach ($editor_styles as $key => $file) {
            if ($file && file_exists("$template_dir/$file")) {
                $mce_css[] = add_query_arg(
                    'version',
                    filemtime("$template_dir/$file"),
                    "$template_uri/$file"
                );
            }
        }
    }

    foreach ($editor_styles as $file) {
        if ($file && file_exists("$style_dir/$file")) {
            $mce_css[] = add_query_arg(
                'version',
                filemtime("$style_dir/$file"),
                "$style_uri/$file"
            );
        }
    }

    return implode(',', $mce_css);
}




// ADMIN STYLES
function ew_admin_styles() {
    wp_enqueue_style('ew-admin-styles', get_template_directory_uri() . '/dist/css/admin-styles.css?' . time());
    wp_enqueue_script( 'ew-admin-scripts', get_template_directory_uri() . '/dist/js/admin-scripts.js?' . time(), '', '', true);
}

//add_action( 'admin_enqueue_scripts', 'ew_admin_styles' );

// remove CSS variables --wp--preset--color/gradient/duotone
//remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
//remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

// remove SVG definitions for gradient/duotone
//remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'enqueue_block_assets', 'wp_enqueue_global_styles' );


add_filter( 'wp_theme_json_data_theme', function ( \WP_Theme_JSON_Data $theme_json ): \WP_Theme_JSON_Data {
	$data = $theme_json->get_data();

	// Color tjek
	if ( isset( $data['settings']['color'] ) ) {
		if ( isset( $data['settings']['color']['defaultDuotone'] ) && $data['settings']['color']['defaultDuotone'] === false ) {
			$data['settings']['color']['duotone']['default'] = array();
		}
		if ( isset( $data['settings']['color']['defaultGradients'] ) && $data['settings']['color']['defaultGradients'] === false ) {
			$data['settings']['color']['gradients']['default'] = array();
		}
		if ( isset( $data['settings']['color']['defaultPalette'] ) && $data['settings']['color']['defaultPalette'] === false ) {
			$data['settings']['color']['palette']['default'] = array();
		}
	}

	// Dimensions tjek
	if ( isset( $data['settings']['dimensions']['defaultAspectRatios'] ) && $data['settings']['dimensions']['defaultAspectRatios'] === false ) {
		$data['settings']['dimensions']['aspectRatios']['default'] = array();
	}

	// LINJE 116 FIX: Shadow tjek
	if ( isset( $data['settings']['shadow']['defaultPresets'] ) && $data['settings']['shadow']['defaultPresets'] === false ) {
		$data['settings']['shadow']['presets']['default'] = array();
	}

	// LINJE 121 FIX: Spacing tjek
	if ( isset( $data['settings']['spacing']['defaultSpacingSizes'] ) && $data['settings']['spacing']['defaultSpacingSizes'] === false ) {
		$data['settings']['spacing']['spacingSizes']['default'] = array();
	}

	// Typography tjek
	if ( isset( $data['settings']['typography']['defaultFontSizes'] ) && $data['settings']['typography']['defaultFontSizes'] === false ) {
		$data['settings']['typography']['fontSizes']['default'] = array();
	}

	$theme_json->update_with( $data );

	return $theme_json;
} );