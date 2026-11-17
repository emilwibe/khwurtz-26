<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<?php

// GIFS DATA
$kh_gifs = [
    ['Throwing Maniac', [12, 14], []],
    ['Jigger Master', [12, 20]],
    ['Glaze Wizard', [12, 27]],
    ['Imperfections Spotter', [41, 27]],
    ['Stacking Ninja', [41, 52]],
    ['Spray Expert', [69, 52]],
    ['Packing Professor', [69, 72]],
    ['Speed Monster', [69, 87]],
];

$file_gifs = glob(get_template_directory() . '/assets/img/workshop-gifs/*.gif');
$gif_loop_counter = 0;

?>
<div class="activity-inner">

    <div class="map">

        <p class="total-distance">total distance: <span id="ws-dist">12</span></p>

        <div class="map-container" data-slide="0">

        <img src="<?php echo get_template_directory_uri() . '/assets/img/workshop-map-sketch.png'; ?>" alt="Workshop map" class="load-media-on-load workshop-map-desktop" onload="loadMediaonLoad(this)">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/workshop-map-mobile.png'; ?>" alt="Workshop map" class="load-media-on-load workshop-map-mobile" onload="loadMediaonLoad(this)">

        </div><!--/.map-container-->

    </div><!--/.map-->

    <div class="animations">


        <?php foreach ($file_gifs as $gif) : ?>

            <div class="animation-container">

                <div class="text-container">

                    <p class="note">
                        <span>9.065330E</span>
                        <span>55.854030N</span>
                    </p>

                    <h3 class="animation-heading"><?php echo $kh_gifs[$gif_loop_counter][0]; ?></h3>

                </div><!--/.text-container-->

                <img src="<?php echo get_template_directory_uri() . '/assets/img/workshop-gifs/' . basename($gif); ?>" alt="animation" class="kh-animation">

            </div><!--/.animation-container-->

        <?php endforeach; ?>

    </div><!--/.animations-->

</div><!- /.activity-inner-->