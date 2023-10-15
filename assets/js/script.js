// shadow
function scrollHeader() {
  const header = document.getElementById("header");
  if (this.scrollY >= 40) header.classList.add("scroll-header");
  else header.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

// theme
const theme = document.getElementById("theme");
function change_theme() {
    const body = document.getElementById("body");
    const navbar = document.getElementById("header");
    const nav = document.querySelector(".nav_menu");
    
    if (body.classList.contains("theme-light")) {
    body.classList.remove("theme-light");
    body.classList.add("theme-dark");
    theme.classList.remove("bxs-sun");
    theme.classList.add("bxs-moon");
    navbar.classList.add("navbar-dark");
    nav.classList.add("nav_menu_dark");
    } else {
    body.classList.remove("theme-dark");
    body.classList.add("theme-light");
    theme.classList.remove("bxs-moon");
    theme.classList.add("bxs-sun");
    navbar.classList.remove("navbar-dark");
    nav.classList.remove("nav_menu_dark");
    }
}
theme.addEventListener("click", change_theme);
