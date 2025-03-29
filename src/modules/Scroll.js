export default class scroll {

    constructor() {

        this.header = document.querySelector("header");
        this.topBar = this.header.querySelector(".header__top-bar");
       
        window.addEventListener("scroll", () => {
            this.topBar.classList.toggle("hidden", window.scrollY > 0);
            if(window.scrollY > 100){
                this.header.classList.add("opacity-30");
            }
            else{
                this.header.classList.remove("opacity-30");
            }
      
            this.header.classList.toggle("header-scrolled", window.scrollY > 108);
        });
    }
}
