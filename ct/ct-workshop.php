<?php
    /* Template Name: The Workshop */
    if (!defined('ABSPATH')) { exit; }    
?>
<?php get_header(); ?>

<?php if( have_posts() ) : ?>

    <main>

    <?php while( have_posts() ) : the_post(); ?>

    <section class="workshop-sketch">

        <div class="workshop-sketch-sketch">

            <div class="workshop-sketch-container">
                <?php eww_print_img( 'kh_img', false ); ?>
            </div><!--/.workshop-sketch-container-->
            

            <?php get_template_part( 'assets/ui-svg/coords-logo' ); ?>
            <?php get_template_part( 'assets/ui-svg/coords-logo-mobile' ); ?>
            <?php get_template_part( 'tp/components/tag-scroll-down' ); ?>

            

        </div><!--/.workshop-sketch-sketch-->

        <div class="sketch-scroll-images">

        <?php

                echo wp_get_attachment_image( get_field( 'kh_sketch_image_1' ), 'full', false, ['class' => 'kh_sketch_img_1'] );
                echo wp_get_attachment_image( get_field( 'kh_sketch_image_2' ), 'full', false, ['class' => 'kh_sketch_img_2']  );
                echo wp_get_attachment_image( get_field( 'kh_sketch_image_4' ), 'full', false, ['class' => 'kh_sketch_img_4']  );
                echo wp_get_attachment_image( get_field( 'kh_sketch_image_3' ), 'full', false, ['class' => 'kh_sketch_img_3']  );
                echo wp_get_attachment_image( get_field( 'kh_sketch_image_5' ), 'full', false, ['class' => 'kh_sketch_img_5']  );

            ?>

        </div><!--/.sketch-scroll-images-->

    </section><!--/.workshop-sketch-->

    <?php get_template_part( 'tp/flex/_flex-init' ); ?>

    <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer("kh"); ?>