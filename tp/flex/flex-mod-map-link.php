<?php if (!defined('ABSPATH')) { exit; } ?>

<?php eww_print_img('kh_flex_img', true, '', ''); ?>

<div class="n-h-btn">

<?php
    $kh_map_link = get_sub_field('kh_flex_link');
?>

    <?php eww_print_field( 'kh_flex_note', true, '<p class="note kh-reveal">', '</p>' ); ?>

    <?php eww_print_field( 'kh_flex_heading', true, '<h2 class="heading kh-reveal-2">', '</h2>' ); ?>

    <?php if( $kh_map_link ) : ?>

    <div class="btn-container kh-reveal-3">
        <div class="btn-outer icon-after">
            <a href="<?php echo $kh_map_link['url']; ?>" target="<?php echo $kh_map_link['target']; ?>" class="btn border rounded">
                <?php echo $kh_map_link['title']; ?>
            </a>
        </div>
    </div><!--/.btn-container-->

    <?php endif; ?>

</div><!--/.n-h-btn-->