<?php
if (!defined('ABSPATH')) {
    exit;
}

/*
* CREATE NEW ACF TinyMCE
* For customizing toolbar

* Guide to tools

$toolbars[{id}][{toolbar line number}] = [
    'formatselect',
    'bold',
    'italic',
    'bullist',
    'numlist',
    'blockquote',
    'alignleft',
    'aligncenter',
    'alignright',
    'link',
    'wp_more',
    'spellchecker',
    'fullscreen',
    'wp_adv'
]
$toolbars[{id}][{toolbar line number}]
[0] => strikethrough
[1] => hr
[2] => forecolor
[3] => pastetext
[4] => removeformat
[5] => charmap
[6] => outdent
[7] => indent
[8] => undo
[9] => redo
[10] => wp_help

*/

function ewl_simple_toolbar( $toolbars ) {

    $toolbars['EWL-Simple'] = array();
    $toolbars['EWL-Simple'][1] = [
        'formatselect',
        'bold',
        'italic',
        'bullist',
        'numlist',
        //'blockquote',
        'alignleft',
        'aligncenter',
        'alignright',
        'link',
        'column_button',
        //'wp_more',
        'table',
        'spellchecker',
        'fullscreen',
        'wp_adv'
    ];

    return $toolbars;
}

add_filter('acf/fields/wysiwyg/toolbars', 'ewl_simple_toolbar');

// CUSTOM FORMATING
add_filter('tiny_mce_before_init', function ($settings) {

    // ALL
    // $settings['block_formats'] = 'Tekst=p;Overskrift 1=h1;Overskrift 2=h2;Overskrift 3=h3;Overskrift 4=h4;Overskrift 5=h5;Overskrift 6=h6';

    $settings['block_formats'] = 'Tekst=p;Overskrift=h4';

    return $settings;
});