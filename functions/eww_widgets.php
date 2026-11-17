<?php
if (!defined('ABSPATH')) { exit; }

add_action('widgets_init', function(){
    register_sidebar(array(
        'name' => __('Side-kolonne'),
        'id' => 'right_col',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_heading">',
        'after_title' => '</h2>'
    ));

  register_sidebar(array(
      'name' => __('Footer Area 1'),
      'id' => 'footer_area_i',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget_heading">',
      'after_title' => '</h3>'
  ));

  register_sidebar(array(
      'name' => __('Footer Area 2'),
      'id' => 'footer_area_ii',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget_heading">',
      'after_title' => '</h3>'
  ));

  register_sidebar(array(
      'name' => __('Footer Area 3'),
      'id' => 'footer_area_iii',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget_heading">',
      'after_title' => '</h3>'
  ));

  /*register_sidebar(array(
      'name' => __('Footer Area 4'),
      'id' => 'footer_area_iv',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget_heading">',
      'after_title' => '</h4>'
  ));*/
});