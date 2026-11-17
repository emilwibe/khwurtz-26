<?php if (!defined('ABSPATH')) { exit; } ?>
<?php get_header(); ?>

<?php if( have_posts() ) : ?>

    <main>

    <?php while( have_posts() ) : the_post(); ?>

    <?php //get_template_part( 'tp/flex/_flex-init' ); ?>

    <?php endwhile; ?>

    </main>

<?php endif; ?>

<?php get_footer("kh"); ?>