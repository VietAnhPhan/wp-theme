export default class scroll {

    constructor() {

        this.header = document.querySelector("header");
        this.topBar = this.header.querySelector(".header__top-bar");
        console.log(this.header)
        window.addEventListener("scroll", () => {
            this.topBar.classList.toggle("hidden", window.scrollY > 0);
            this.header.classList.toggle("header-scrolled", window.scrollY > 0);
        });
    }
}
