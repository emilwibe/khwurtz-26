
{
    const containers = document.querySelectorAll(".flex-mod-photos-container");
    const started = new WeakSet();

    function checkPosition() {
        containers.forEach((element) => {
            if (started.has(element)) return;

            const rect = element.getBoundingClientRect();

            if (rect.top <= 100 && rect.bottom > 100) {
                started.add(element);

                const kh_photos_1 = element.querySelectorAll(".kh-photos-slide-1 img");
                const kh_photos_2 = element.querySelectorAll(".kh-photos-slide-2 img");
                const kh_photos_keywords = element.querySelector(".photo-keyword");
                const kh_photos_keywords_parsed = JSON.parse(kh_photos_keywords.dataset.keywords);

                console.log(kh_photos_keywords_parsed);

                const slide_interval = 1600;

                const slider_keywords = () => {
                    if (kh_photos_keywords_parsed.length > 1) {
                        const slide_length = kh_photos_keywords_parsed.length;
                        let slide_counter = 1;

                        const kh_photos_keywords_interval = setInterval(() => {
                            kh_photos_keywords.innerHTML = kh_photos_keywords_parsed[slide_counter];

                            if (slide_counter + 1 == slide_length) {
                                clearInterval(kh_photos_keywords_interval);
                            }

                            slide_counter += 1;
                        }, slide_interval);
                    }
                };

                const slider_1 = () => {
                    if (kh_photos_1.length > 1) {
                        const slide_length = kh_photos_1.length;
                        let slide_counter = 1;

                        const slider_1_interval = setInterval(() => {
                            kh_photos_1[slide_counter].style.animationPlayState = "running";

                            if (slide_counter + 1 == slide_length) {
                                clearInterval(slider_1_interval);
                            }

                            slide_counter += 1;
                        }, slide_interval);
                    }
                };

                const slider_2 = () => {
                    if (kh_photos_2.length > 1) {
                        const slide_length = kh_photos_2.length;
                        let slide_counter = 1;

                        const slider_2_interval = setInterval(() => {
                            kh_photos_2[slide_counter].style.animationPlayState = "running";

                            if (slide_counter + 1 == slide_length) {
                                clearInterval(slider_2_interval);
                            }

                            slide_counter += 1;
                        }, slide_interval);
                    }
                };

                setTimeout(() => {
                    slider_1();
                    slider_2();
                    slider_keywords();
                }, 500);
            }
        });
    }

    window.addEventListener("scroll", checkPosition, { passive: true });

    // Check immediately in case a container is already at the trigger position.
    checkPosition();
}
