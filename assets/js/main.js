document.addEventListener("DOMContentLoaded", () => {
  const scrollBtn = document.getElementById("scroll-btn");

  if (scrollBtn) {
    scrollBtn.addEventListener("click", (e) => {
      e.preventDefault();
      scrollBtn.scrollIntoView({ behavior: "smooth" });
    });
  }
});
