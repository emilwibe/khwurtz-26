
{
    const eww_horizontalScroll = () => {
        const eww_splideLists = document.querySelectorAll(".splide__list");

        eww_splideLists.forEach((eww_splideList) => {

            let eww_targetScroll = eww_splideList.scrollLeft;
            let eww_animationFrame = null;

            const eww_animateScroll = () => {
                const eww_currentScroll = eww_splideList.scrollLeft;
                const eww_diff = eww_targetScroll - eww_currentScroll;

                if (Math.abs(eww_diff) < 0.5) {
                    eww_splideList.scrollLeft = eww_targetScroll;
                    eww_animationFrame = null;
                    return;
                }

                eww_splideList.scrollLeft += eww_diff * 0.12;

                eww_animationFrame = requestAnimationFrame(eww_animateScroll);
            };

            eww_splideList.addEventListener("wheel", (e) => {

                if (window.innerWidth <= 960) return;

                const eww_delta = e.deltaX + e.deltaY;
                const eww_scrollMax = eww_splideList.scrollWidth - eww_splideList.clientWidth;

                const eww_canScroll = eww_delta > 0
                    ? eww_targetScroll < eww_scrollMax
                    : eww_targetScroll > 0;

                if (!eww_canScroll) return;

                e.preventDefault();

                eww_targetScroll = Math.max(
                    0,
                    Math.min(eww_targetScroll + eww_delta, eww_scrollMax)
                );

                if (!eww_animationFrame) {
                    eww_animationFrame = requestAnimationFrame(eww_animateScroll);
                }

            }, { passive: false });

        });
    };

    eww_horizontalScroll();
}
