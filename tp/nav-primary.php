<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<div class="nav-cols">

    <div class="nav-note">
    
        <div class="nav-note-inner">

            <span class="note">Note:</span>

            <span class="note-content">Now is shaping</span>

        </div><!--/.nav-note-inner-->
    
    </div><!--/.nav-note-->

    <div class="nav-content">

        <?php
        wp_nav_menu(array(
            'container_id' => 'nav-primary',
            'container_class' => 'nav-primary',
            'theme_location' => 'primary',
            'container' => 'nav',
            'items_wrap' => '<ul>%3$s</ul>'
        ));
        ?>

    </div><!--/.nav-content-->

</div><!--/.nav-container-->