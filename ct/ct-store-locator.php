<?php
/* Template Name: Store Locator */
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <section class="store-locator-container">

        <div class="l-wrapper xxl locator-inner">

            <?php get_template_part('tp/components/store-locator-nav'); ?>

            <div class="map" id="store-map">

                <?php get_template_part('assets/ui-svg/locator-map'); ?>

            </div><!--/.map-->

            <div class="n-h-btn">
                <p class="note">Retail</p>

                <h1 class="heading">Store locator</h1>

                <div class="btn-container">
                    <div class="btn-outer icon-after">
                        <button id="store-nav-toggle" class="btn border rounded">Find a place</button>
                    </div><!--/.btn-outer.icon-after-->
                </div><!--/.btn-container-->

            </div><!--/.n-h-btn-->

        </div><!--/.locator-inner-->

    </section>

<?php endif; ?>

<?php get_footer("kh"); ?>