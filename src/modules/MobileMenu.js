export default class MobileMenu {
    constructor() {
        this.dropdown = document.querySelector(".header__dropdown");
        this.menuMobile = document.querySelector(".menu__mobile-hidden");
        // this.dropdownClosed = document.createElement(".header__dropdown_closed");
        // this.dropdownClosed.classList.add("fa-solid fa-times");
        // this.dropdownClosed.setAttribute("aria-hidden", true);
        //  this.dropdownOpened = document.querySelector(".dropdown__opened");
        //  this.dropdownMenu = document.querySelector(".dropdown__menu");
        this.dropDownIcon = this.dropdown.firstElementChild;
        this.dropdown.addEventListener("click", () => {
            // dropdownClosed.classList.toggle("display-none");
            // dropdownOpened.classList.toggle("display-none");
            this.dropDownIcon.classList.toggle("fa-bars");
            this.dropDownIcon.classList.toggle("fa-times");

            this.menuMobile.classList.toggle("menu__mobile-hidden");
        });
    }
}