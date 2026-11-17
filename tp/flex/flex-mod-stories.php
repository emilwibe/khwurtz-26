<?php if (!defined('ABSPATH')) { exit; } ?>

<div class="heading-box" id="stories-section">
    <h2 class="heading">Stories</h2>
</div><!--/.heading-box-->

        <?php if( have_rows( 'kh_flex_repeater_stories' ) ) : ?>

<div class="flex-stories-inner">
    <nav>
            <ul>

            <?php while( have_rows( 'kh_flex_repeater_stories' ) ) : the_row(); $story_ID = get_sub_field( 'kh_flex_repeater_story' ); ?>

                <li><a href="<?php echo get_permalink($story_ID); ?>"><?php echo get_the_title( $story_ID ); ?></a></li>

            <?php endwhile; ?>

            </ul>

    </nav>
</div><!--/.flex-stories-inner-->

        <?php endif; ?>