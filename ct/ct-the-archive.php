<?php
/* Template Name: The Archive */
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <section class="l-wrapper xxl archive-hero">

        <div class="archive-heading-container">

            <h1 class="archive-heading">Welcome to the archive</h1>

            <h2 class="archive-sub-heading">feel free to scroll through the longlist of our memories</h2>

        </div><!--/.archive-heading-container-->

    </section><!--/.archive-hero-->

    <main>

        <?php while (have_posts()) : the_post(); ?>
            <?php
            $kh_images = get_field('kh_archive_gallery');
            ?>

            <div class="l-wrapper xxl the-archive-container">

                <div class="splide splide-archive" role="group">

                    <div class="splide__track the-archive-slide-deck">

                        <ul class="splide__list">

                            <?php foreach ($kh_images as $img) : ?>

                                <li class="splide__slide" style="height: 100%;">

                                    <?php echo wp_get_attachment_image($img, 'full', false, ["class" => "load-media-on-load archive-img", 'onload' => 'loadMediaonLoad(this)']); ?>

                                    <div class="img-data">
                                        <span class="number"></span>
                                        <span class="date"><?php echo get_the_date('d/m/y', $img); ?></span>
                                    </div>

                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                </div><!--/.the-archive-container-->

            <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer("kh"); ?>