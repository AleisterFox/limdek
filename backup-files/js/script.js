const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");
const searchBar = document.querySelector(".search");
const bodyMain = document.querySelector("main");
const profileBar = document.querySelector(".profile");
const profileBar2 = document.querySelector(".profile2");
const profileMenu = document.querySelector(".profile-menu");
const profileMenu2 = document.querySelector(".profile-menu2");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 769) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        burguerButton.classList.remove("fa-bars");
        burguerButton.classList.add("fa-x");
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
        burguerButton.classList.remove("fa-x");
        burguerButton.classList.add("fa-bars");
      }
    });
  }
});

searchBar.addEventListener("click", () => {
  if (!searchBar.classList.contains("active-search")) {
    searchBar.classList.add("active-search");
  }
});

bodyMain.addEventListener("click", () => {
  if (searchBar.classList.contains("active-search")) {
    searchBar.classList.remove("active-search");
  }
});

profileBar.addEventListener("click", () => {
  profileMenu.classList.toggle("active");
});

profileBar2.addEventListener("click", () => {
  profileMenu2.classList.toggle("active");
});

const masVendidos = document.querySelectorAll('#mas-vendidos .container');
// const slideLefts = document.querySelectorAll('.slide__button--left');
// const slideRights = document.querySelectorAll('.slide__button--right');
// let sliding = 0;



masVendidos.forEach((masVendido) => {
  let sliding = 0;
  const slideLeft = masVendido.parentNode.querySelector('#mas-vendidos .slide__button--left');
  const slideRight = masVendido.parentNode.querySelector('#mas-vendidos .slide__button--right');
  slideRight.addEventListener('click', () => {
    sliding += 250;
    masVendido.scrollTo({
      left:sliding,
      behavior : 'smooth'
    });
  });


  slideLeft.addEventListener('click', () => {
    sliding -= 250;
    masVendido.scrollTo({
      left:sliding,
      behavior : 'smooth'
    });
  });

});



// slideRights.forEach(slideRight => {
//   slideRight.addEventListener('click', () => {
//     sliding += 250;
//     masVendidos.scrollTo({
//       left:sliding,
//       behavior : 'smooth'
//     });
//   });
// });

// slideLeft.addEventListener('click', () => {
//   sliding -= 250;
//   masVendidos.scrollTo({
//     left:sliding,
//     behavior : 'smooth'
//   });
// });