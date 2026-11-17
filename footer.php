<footer class="footer-global">

    <div class="l-wrapper xl l-grid-12">
        <div class="footer-widget-1" id="contact">
            <div><?php dynamic_sidebar('footer_area_i'); ?></div>
        </div>
        <div class="footer-widget-2">
            <div><?php dynamic_sidebar('footer_area_ii'); ?></div>
        </div>
        <div class="footer-widget-3">
            <div><?php dynamic_sidebar('footer_area_iii'); ?></div>
        </div>
    </div>


    <?php
    if (get_field('footer_bg', 'option')) {
        echo wp_get_attachment_image(get_field('footer_bg', 'option'), 'ewl-full', false, ["class" => "load-media-on-load footer-image", 'onload' => 'loadMediaonLoad(this)']);
    }
    ?>

</footer>

<?php wp_footer(); ?>

</body>

</html>