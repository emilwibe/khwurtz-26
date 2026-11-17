{
    let animation_slides = document.querySelectorAll(".animation-container");
    let a_length = animation_slides.length;
    let current_slide = 0;
    let distance = [
        12, 26, 53, 72, 119, 143, 175, 197
    ];

    if ( a_length ) {

        let map_container = document.querySelector(".map-container");
        let dist = document.getElementById("ws-dist");
        
        let slide_mechanism = () => {

            /* CURRENT SLIDE  */
                animation_slides[current_slide].style.animationName = "mid-to-top";
                animation_slides[current_slide].style.animationPlayState = "running";
            
            if( current_slide == a_length - 1 ) {

                /* NEXT SLIDE */
                animation_slides[0].style.transform = "translateY(100%)";
                animation_slides[0].style.animationName = "translate-btt";
                animation_slides[0].style.animationPlayState = "running";


                current_slide = 0;

            } else {

                /* NEXT SLIDE */
                animation_slides[current_slide + 1].style.transform = "translateY(100%)";
                animation_slides[current_slide + 1].style.animationName = "translate-btt";
                animation_slides[current_slide + 1].style.animationPlayState = "running";

                current_slide += 1;
            }
            map_container.dataset.slide = current_slide;
            dist.innerHTML = distance[current_slide];

        }

        setInterval( slide_mechanism, 3000 );

    }
}