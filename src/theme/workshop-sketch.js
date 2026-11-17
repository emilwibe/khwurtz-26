{
  if (document.querySelector(".page-template-ct-workshop")) {
    let isTriggered = false;

    function preventScroll(e) {
      e.preventDefault();

      if (isTriggered) return;
      isTriggered = true;

      document.body.classList.add("scrolled");

      document.querySelector(
        ".workshop-sketch-container",
      ).style.animationPlayState = "running";

      setTimeout(function () {
        window.removeEventListener("wheel", preventScroll);
        window.removeEventListener("touchmove", preventScroll);
      }, 500);
    }

    window.addEventListener("wheel", preventScroll, {
      passive: false,
    });

    window.addEventListener("touchmove", preventScroll, {
      passive: false,
    });
  }
}