{
    let hero_popup = document.querySelector(".kh-hero-video-container .popup");

    if (hero_popup) {
        hero_popup.addEventListener("click", function(e) {
            if (e.target.tagName == "BUTTON") {
                document.body.classList.add("hero-video-popup-closed");
            }
        });
    }

    const checkScroll = () => {
        if (window.scrollY > 0) {
            document.body.classList.add("hero-video-popup-closed");
        }
    };

    //window.addEventListener("scroll", checkScroll);
    window.addEventListener("load", checkScroll);

    checkScroll();
}