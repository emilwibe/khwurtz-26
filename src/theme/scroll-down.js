{
  document.querySelectorAll(".tag-scroll-down").forEach((element) => {
    element.addEventListener("click", () => {
      window.scrollBy({
        top: window.innerHeight,
        behavior: "smooth",
      });
    });
  });
}
