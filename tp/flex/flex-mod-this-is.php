<?php if (!defined('ABSPATH')) { exit; } ?>

<div class="this-is-inner">

    <?php get_template_part( 'assets/ui-svg/le-institute' ); ?>

    <?php eww_print_field( 'kh_heading', true, '<h4>', '</h4>' ); ?>

    <div class="this-is-content">

        <?php eww_print_field( 'kh_txt', true ); ?>

    </div><!--/.this-is-content-->

</div><!--/.this-is-inner-->