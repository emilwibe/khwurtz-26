<?php if (!defined('ABSPATH')) { exit; } ?>

<?php if( have_rows( 'kh_flex' ) ) : ?>

    <?php while( have_rows( 'kh_flex' ) ) : the_row(); ?>

    <section class="flex-mod <?php echo get_row_layout(); ?>">

        <div class="l-wrapper xxl flex-mod-inner">

    <?php
        if( get_row_layout() == 'flex_mod_sketch' ) {
            get_template_part( 'tp/flex/flex-mod-sketch' );
        } elseif ( get_row_layout() == 'flex_mod_photos' ) {
            get_template_part( 'tp/flex/flex-mod-photos' );
        } elseif ( get_row_layout() == 'flex_mod_stories' ) {
            get_template_part( 'tp/flex/flex-mod-stories' );
        } elseif( get_row_layout() == 'flex_mod_feat_link' ) {
            get_template_part( 'tp/flex/flex-mod-feat-link' );
        } elseif ( get_row_layout() == 'flex_mod_map_link' ) {
            get_template_part( 'tp/flex/flex-mod-map-link' );
        } elseif ( get_row_layout() == 'flex_mod_manifesto' ) {
            get_template_part( 'tp/flex/flex-mod-manifesto' );
        } elseif ( get_row_layout() == 'flex_mod_this_is' ) {
            get_template_part( 'tp/flex/flex-mod-this-is' );
        } elseif ( get_row_layout() == 'flex_mod_activity' ) {
            get_template_part( 'tp/flex/flex-mod-activity' );
        } elseif ( get_row_layout() == 'flex_mod_numbers' ) {
            get_template_part( 'tp/flex/flex-mod-numbers' );
        } elseif ( get_row_layout() == 'flex_mod_distance' ) {
            get_template_part( 'tp/flex/flex-mod-distance' );
        } elseif( get_row_layout() == 'flex_mod_regards' ) {
            get_template_part( 'tp/flex/flex-mod-regards' );
        }
    ?>

        </div><!--/.flex-mod-inner-->

    </section><!--/.flex-mod-->

    <?php endwhile; ?>

<?php endif; ?>