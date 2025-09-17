export default class scroll {

    constructor() {

        this.header = document.querySelector("header");
        this.topBar = this.header.querySelector(".header__top-bar");
       
        window.addEventListener("scroll", () => {
            if(window.scrollY > 0 && !this.topBar.classList.contains('hidden')){
                this.topBar.classList.add("hidden");
            }

            if(window.scrollY==0 && this.topBar.classList.contains('hidden')){
                this.topBar.classList.remove("hidden");
            }
            // this.topBar.classList.toggle("hidden", window.scrollY > 0);
            // if(window.scrollY > 100){
            //     this.header.classList.add("opacity-30");
            // }
            // else{
            //     this.header.classList.remove("opacity-30");
            // }
            if(window.scrollY > 108 && ! this.header.classList.contains('header-scrolled')){
                this.header.classList.add("header-scrolled");
            }
            if(window.scrollY < 108 &&  this.header.classList.contains('header-scrolled'))
            {
                this.header.classList.remove("header-scrolled");
            }
            // this.header.classList.toggle("header-scrolled", window.scrollY > 108);
        });
    }
}
