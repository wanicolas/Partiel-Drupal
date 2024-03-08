// Zoom out every image in an article on click
window.addEventListener('DOMContentLoaded', (event) => {
    Array.from(document.querySelectorAll(".page_article img")).forEach(
      (img) => {
        img.onclick = function () {
          if (this.style.transform === "scale(0.75)") {
            this.style.transform = "scale(1)";
          } else {
            this.style.transform = "scale(0.75)";
          }
        };
      }
    );
});