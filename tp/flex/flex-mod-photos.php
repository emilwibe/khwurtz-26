<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<div class="flex-mod-photos-container">

    <?php
    $kh_gallery_1 = get_sub_field('kh_flex_img_1');
    $kh_gallery_2 = get_sub_field('kh_flex_img_2');

    $kh_keywords = get_sub_field('kh_flex_keywords');
    $kh_keywords_arr = [];

    foreach( $kh_keywords as $keyword ) {
        array_push($kh_keywords_arr, $keyword['kh_flex_keyword']);
    }

    //var_dump($kh_keywords);
    ?>

    <div class="kh-photos-slide kh-photos-slide-1">

     <?php foreach ($kh_gallery_1 as $img_ID) : ?>

        <?php
            echo wp_get_attachment_image($img_ID, 'full', false);
        ?>

    <?php endforeach; ?>

    </div><!--/.kh-photos-slide-1-->

    <div class="kh-photos-slide kh-photos-slide-2">

     <?php foreach ($kh_gallery_2 as $img_ID) : ?>

        <?php
            echo wp_get_attachment_image($img_ID, 'full', false);
        ?>

    <?php endforeach; ?>

    </div><!--/.kh-photos-slide-2-->

    <div class="flex-photos-heading-container">

        <?php eww_print_field('kh_flex_txt', true, '<h2 class="flex-photos-heading kh-reveal"> ', ' <span class="photo-keyword" data-keywords="' . esc_attr(json_encode($kh_keywords_arr)) . '">' . $kh_keywords_arr[0] . '</span></h2>'); ?>

    </div><!--/.flex-photos-heading-container-->

</div><!--/.flex-mod-photos-container-->