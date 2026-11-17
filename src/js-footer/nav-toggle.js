{
  navToggle = document.getElementById("nav-toggle");
  const sr = ScrollReveal();

  if (navToggle) {
    navToggle.addEventListener(
      "click",
      function (e) {
        document.body.classList.toggle("nav-is-open");
        document.body.classList.remove("store-nav-is-open");

        ScrollReveal().reveal(".nav-primary a", {
          origin: "bottom",
          delay: 600,
          distance: "50px",
          duration: 1000,
          reset: false,
        });
      },
      false,
    );
  }
}
