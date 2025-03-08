window.addEventListener("scroll", function () {
    let header = document.querySelector("header");
    let topBar = document.querySelector(".top-bar");
    topBar.classList.toggle("display-none", window.scrollY > 0);
    header.classList.toggle("scrolled", window.scrollY > 0);
});

const dropdown = document.querySelector(".dropdown");
const dropdownClosed = document.querySelector(".dropdown__closed");
const dropdownOpened = document.querySelector(".dropdown__opened");
const dropdownMenu= document.querySelector(".dropdown__menu");

dropdown.addEventListener("click", function () {
    dropdownClosed.classList.toggle("display-none");
    dropdownOpened.classList.toggle("display-none");
    dropdownMenu.classList.toggle("display-none");
});

const subMenu = document.querySelector(".submenu");
console.log(subMenu.closest(".menu-item"));
subMenu.addEventListener("mouseenter", () => {
    const MenuItem = subMenu.previousElementSibling;
    MenuItem.classList.add("menu-item__active");
    console.log("mouse enter");
});

subMenu.addEventListener("mouseleave", () => {
    const MenuItem = subMenu.previousElementSibling;
    MenuItem.classList.remove("menu-item__active");
});

