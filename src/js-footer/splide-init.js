{
  // Story
  let story = document.querySelectorAll(".splide-story");

  if (story.length) {
    for (let i = 0; i < story.length; i += 1) {
      let splide = new Splide(story[i], {
        type: "loop",
        autoplay: true,
        interval: 4000,
        speed: 600,
        perPage: 1,
        perMove: 1,
        gap: 12,
        arrows: false,
        pagination: false,
        rewind: false,
        mediaQuery: "min",
        breakpoints: {
          769: {
            destroy: true,
          },
        },
      });
      splide.mount();
    }
  }
}

{
  let eww_splideInstance = null;

  const eww_openSlider = (eww_images, eww_startIndex) => {
    // Create overlay
    const eww_overlay = document.createElement("div");
    eww_overlay.classList.add("l-wrapper");
    eww_overlay.classList.add("xxl");
    eww_overlay.classList.add("eww-slider-overlay");

    eww_overlay.innerHTML = `
            <div class="eww-dynamic-splide-outer">
            <div class="splide eww-dynamic-splide">
                <div class="splide__track">
                    <ul class="splide__list"></ul>
                </div>
            </div>
            <button class="eww-slider-close" aria-label="Close slider">&times;</button>
            </div><!--/.eww-dynamic-splide-outer-->
        `;

    const eww_list = eww_overlay.querySelector(".splide__list");

    // Clone images into slider
    eww_images.forEach((eww_image) => {
      const eww_slide = document.createElement("li");
      eww_slide.classList.add("splide__slide");

      eww_slide.appendChild(eww_image.cloneNode(true));
      eww_list.appendChild(eww_slide);
    });

    document.body.appendChild(eww_overlay);

    // Initialize Splide
    eww_splideInstance = new Splide(eww_overlay.querySelector(".splide"), {
      type: "loop",
      perPage: 1,
      start: eww_startIndex,
      pagination: false,
      arrows: true,
      speed: 600,
    });

    eww_splideInstance.mount();

    eww_overlay
      .querySelector(".eww-slider-close")
      .addEventListener("click", eww_closeSlider);
  };

  // Close slider
  const eww_closeSlider = () => {
    if (eww_splideInstance) {
      eww_splideInstance.destroy(true);
      eww_splideInstance = null;

      document.body.classList.remove("slider-is-open");
    }

    document.querySelector(".eww-slider-overlay")?.remove();
  };

  // Click images to open slider
  document
    .querySelectorAll(".splide-archive .archive-img")
    .forEach((eww_image) => {
      eww_image.addEventListener("click", () => {
        const eww_gallery = eww_image.closest(".splide-archive");

        const eww_images = [...eww_gallery.querySelectorAll(".archive-img")];

        const eww_startIndex = eww_images.indexOf(eww_image);

        eww_openSlider(eww_images, eww_startIndex);

        document.body.classList.add("slider-is-open");
      });
    });

  // Close with Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      eww_closeSlider();
    }
  });
}
