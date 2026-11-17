{
  if (document.body.classList.contains("page-template-ct-store-locator")) {
    // BUTTON "Find a place"
    let store_toggle = document.getElementById("store-nav-toggle");
    let store_locator_nav = document.querySelector(".store-locator-nav");
    let store_nav_items = store_locator_nav.querySelectorAll("li");

    console.log(store_nav_items);

    let reset_dots = () => {
      // reset dots
      for (let ii = 0; ii < store_dots.length; ii += 1) {
        store_dots[ii].classList.remove("active");
      }
    };
    let reset_nav_items = () => {
      for (let iii = 0; iii < store_nav_items.length; iii += 1) {
        store_nav_items[iii].classList.remove("item-active");
      }
    };

    if (store_toggle) {
      store_toggle.addEventListener("click", function () {
        document.body.classList.toggle("store-nav-is-open");

        if (document.body.classList.contains("nav-is-open")) {
          document.body.classList.remove("nav-is-open");
        }
      });
    }

    // MAP DOTS CLICK
    let store_dots = document.querySelectorAll(".map-dot");
    let map = document.getElementById("store-map");
    let nav_item = "";

    for (let i = 0; i < store_dots.length; i += 1) {
      store_dots[i].addEventListener("click", function (e) {
        reset_dots();
        reset_nav_items();

        e.target.classList.add("active");
        document.body.classList.add("store-nav-is-open");

        map.setAttribute("data-world", e.target.dataset.world);

        nav_item = "item-" + e.target.dataset.store;
        document.querySelector("." + nav_item).classList.add("item-active");
        document.querySelector(".item-active").scrollIntoView({
          behavior: "smooth",
          block: "nearest",
        });
      });
    }
    // LIST CLICKS
    let list_click_class = "";
    let area_class = "";
    for (let n = 0; n < store_nav_items.length; n += 1) {
      store_nav_items[n].addEventListener("click", function (e) {
        if (!store_nav_items[n].classList.contains("item-active")) {
          reset_nav_items();
          reset_dots();
          list_click_class = store_nav_items[n].getAttribute("class").slice(5);
          map.setAttribute(
            "data-world",
            document
              .querySelector(".store-" + list_click_class)
              .getAttribute("data-world"),
          );
          store_nav_items[n].classList.add("item-active");

          console.log(document.querySelector(".label-" + list_click_class));
          document
            .querySelector(".store-" + list_click_class)
            .classList.add("active");
        }
      });
    }

    // STORE NAV CLOSE
    let close_nav = document.getElementById("close-store-locator-nav");

    if (close_nav) {
      close_nav.addEventListener("click", function () {
        document.body.classList.remove("store-nav-is-open");
        map.setAttribute("data-world", "");

        reset_dots();
        reset_nav_items();
      });
    }
  }
}
