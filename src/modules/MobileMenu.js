export default class MobileMenu {
    constructor() {
        this.dropdown = document.querySelector(".header__dropdown");
        this.menuMobile = document.querySelector(".menu__mobile-hidden");
        this.dropDownIcon = this.dropdown.firstElementChild;

        this.dropdown.addEventListener("click", () => {
            this.dropDownIcon.classList.toggle("fa-bars");
            this.dropDownIcon.classList.toggle("fa-times");

            // this.menuMobile.classList.toggle("menu__mobile-hidden");
            // this.menuMobile.classList.toggle("menu__mobile-active");

            if (this.menuMobile.classList.contains("menu__mobile-active")) {
                this.menuMobile.classList.remove("menu__mobile-active");
                setTimeout(() => this.menuMobile.classList.add("menu__mobile-hidden"), 300); // Hide after animation
              } else {
                this.menuMobile.classList.remove("menu__mobile-hidden");
                setTimeout(() => this.menuMobile.classList.add("menu__mobile-active"), 10); // Small delay to trigger animation
              }

        });

        this.subMenu = document.querySelector(".header__submenu-list");
        this.openSubMenu();
    }

    openSubMenu() {
        const MenuItem = this.subMenu.nextElementSibling;
        this.subMenu.addEventListener("mouseenter", () => {
            this.subMenu.classList.remove("hidden");
            // MenuItem.classList.remove("hidden");
        });

        this.subMenu.addEventListener("mouseleave", () => {
            this.subMenu.classList.add("hidden");
            // MenuItem.classList.add("hidden");
        });
    }

}