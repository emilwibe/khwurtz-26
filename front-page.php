<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <main>

        <?php while (have_posts()) : the_post(); ?>

            <?php
            if (get_field('kh_video')) :
                $kh_video_ID = get_field('kh_video');
                $kh_video_URL = wp_get_attachment_url($kh_video_ID);
            ?>

                <section class="l-wrapper fw kh-hero-video-container">
                    <video class="kh-hero-video load-media-on-load" oncanplay="loadMediaonLoad(this)" muted autoplay loop >
                        <source src="<?php echo $kh_video_URL; ?>" type="video/mp4">
                    </video>

                    <?php get_template_part( 'tp/components/tag-scroll-down' ); ?>

                    <div class="popup">

                        <div class="popup-txt-container">

                            <h5>Website Access Notice</h5>

                            <h6>This website may contain clayssified or clayfidential inforclaytions
                                intended only for authorized users. Any unauthorized access, use, disclosure, or distribution of this content is strictly prohibited. By continuing, you confirm that you are an authorized user. If you are not authorized to access this site, please exit immediately.</h6>

                        </div><!--/.popup-txt-container-->

                        <div class="popup-btn-container">

                            <button class="popup-btn">Continue</button>
                            <button class="popup-btn">Exit</button>
                            <button class="popup-btn">Not Sure</button>

                        </div><!--/.popup-btn-container-->

                    </div><!--/.popup-->
                </section>

            <?php endif // kh_video 
            ?>

            <?php get_template_part( 'tp/flex/_flex-init' ); ?>

        <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer("kh"); ?>