const headerBar1 = document.querySelector("header");
const mainHero1 = document.querySelector("section:first-child");

headerBar1.style.backgroundColor = "transparent !important";
headerBar1.style.mixBlendMode = "initial !important";

window.addEventListener("scroll", function () {
  if (window.scrollY === 0 && headerBar.offsetTop === mainHero1.offsetTop) {
    headerBar1.style.backgroundColor = "transparent !important";
    headerBar1.style.mixBlendMode = "initial !important";
  } else {
    headerBar1.style.backgroundColor = "rgba(115, 106, 90, 0.9) !important";
    headerBar1.style.mixBlendMode = "initial !important";
  }
});
