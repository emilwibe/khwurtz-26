<?php
$kh_timezone = new DateTimeZone('Europe/Copenhagen');
$kh_datetime = new DateTime('now', $kh_timezone);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        /**
         * Fades media in on load to prevent curtain load
         *
         * @param   target    References the element / img tag self
         *
         * @return  void
         */
        function loadMediaonLoad(target) {
            target.style.animationPlayState = "running";
        }

        /**
         * Adds class to body when window is loadet
         */
        window.addEventListener("load", () => {
            document.body.classList.add("page-loaded");
        });

        if (window.scrollY == 0) {
            document.body.classList.add("hero-video-popup-active");
        }

    </script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <script>
        /**
         * Prevents scroll bugs when using fixed positioned header reloading on mobile
         */
        if(document.body.classList.contains("page-template-ct-store-locator")) {
            history.scrollRestoration = 'manual';
        }
    </script>

    <header class="header-global">

        <div class="l-wrapper xxl header-global-inner">

            <div class="clock-container">
                <time datetime="<?php echo $kh_datetime->format('H:i:s'); ?>" class="hatting-time">Hatting / DK <?php echo $kh_datetime->format('H:i:s'); ?></time>
            </div>

            <a href="<?php echo get_site_url(); ?>" class="logo-link">

                <?php get_template_part('assets/brand/logo'); ?>

            </a>

            <div class="nav-container">

                <button id="nav-toggle" class="btn nav-toggle">Menu</button>

                <div class="nav-hider"></div>

                <?php get_template_part('tp/nav-primary'); ?>

            </div>

        </div><!--/.header-global-inner-->

    </header><!--/.header-global-->