<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

            <div class="l-wrapper xxl flex-mod-inner">

                <div class="heading-box">

                    <h2 class="heading">Stories</h2>

                </div><!--/.heading-box-->

                <div class="single-story-inner">

                    <aside class="single-story-aside">

                        <?php get_template_part('tp/nav-story'); ?>

                        <div class="title-container">

                            <h1 class="title"><?php the_title(); ?></h1>

                        </div><!--/.title-container-->

                        <?php if (get_field('kh_story_photographer')) : ?>

                            <div class="single-story-author-container">

                                <p class="note">Photos by:</p>

                                <h3 class="photo-author"><?php the_field('kh_story_photographer'); ?></h3>

                            </div><!--/.single-story-author-container-->

                        <?php endif; ?>

                    </aside>

                    <main class="single-stories-main">

                        <?php if (get_field('kh_story_slides')) : ?>
                        <?php
                            $story_data = get_field('kh_story_slides');
                            //var_dump($story_data);
                        ?>

                            <div class="splide splide-story" role="group">

                                <div class="splide__track single-story-slide-deck">

                                    <ul class="splide__list">

                                    <?php foreach ( $story_data as $data ) : ?>

                                        <li class="splide__slide" style="height: 100%;">

                                            <?php echo wp_get_attachment_image( $data, 'full', false, ["class" => "load-media-on-load story-img", 'onload' => 'loadMediaonLoad(this)'] ); ?>

                                        </li>
                                        <?php if( get_post_meta($data, 'eww_additional_info', true) ) : ?>

                                            <li class="splide__slide" style="height: 100%;">

                                            <div class="story-text">

                                            <?php echo get_post_meta($data, 'eww_additional_info', true); ?>

                                            </div><!--/.story-text-->

                                            </li>

                                        <?php endif; ?>

                                    <?php endforeach; ?>

                                    </ul>

                                </div>

                            </div>

                        <?php endif; ?>

                        <?php if (get_field('kh_story_photographer')) : ?>

                            <div class="single-story-author-container-mobile">

                                <p class="note">Photos by:</p>

                                <h3 class="photo-author"><?php the_field('kh_story_photographer'); ?></h3>

                            </div><!--/.single-story-author-container-mobile-->

                        <?php endif; ?>

                    </main>

                </div><!--/.single-story-inner-->

            </div><!--/.flex-mod-inner-->

    <?php endwhile; // THE LOOP 
    ?>

<?php endif; // THE LOOP 
?>

<?php get_footer('kh'); ?>