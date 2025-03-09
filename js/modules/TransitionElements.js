export class TransitionElement {
    constructor() {
        this.leftHiddenSections = document.querySelectorAll(".left-hidden__section");
        this.downHiddenSections = document.querySelectorAll(".down-hidden__section");
        this.opacityFullSections = document.querySelectorAll(".opacity-full__section");
        this.rightHiddenSections = document.querySelectorAll(".right-hidden__section");
        this.observer = null;

        this.leftToRight();
        this.downToUp();
        this.fillFullOpacity();
        this.rightToLeft();
    }

    leftToRight() {
       
        this.observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                console.log(entry.target)
                console.log("👀 isIntersecting:", entry.isIntersecting);
                if (entry.isIntersecting) {
                   
                    entry.target.classList.add("show");
                   
                }
            });
        }, { rootMargin: "0px 0px -200px 0px" });

        this.leftHiddenSections.forEach(section => {
            this.observer.observe(section);
        });

    }

    downToUp(){
        this.observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                console.log(entry.target)
                console.log("👀 isIntersecting:", entry.isIntersecting);
                if (entry.isIntersecting) {
                   
                    entry.target.classList.add("show");
                   
                }
            });
        }, { rootMargin: "0px 0px 400px 0px" });

        this.downHiddenSections.forEach(section => {
            this.observer.observe(section);
        });
    }

    fillFullOpacity(){
        this.observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                console.log(entry.target)
                console.log("👀 isIntersecting:", entry.isIntersecting);
                if (entry.isIntersecting) {
                   
                    entry.target.classList.add("show");
                   
                }
            });
        }, { rootMargin: "0px 0px 200px 0px" });

        this.opacityFullSections.forEach(section => {
            this.observer.observe(section);
        });
    }

    rightToLeft(){
        this.observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                console.log(entry.target)
                console.log("👀 isIntersecting:", entry.isIntersecting);
                if (entry.isIntersecting) {
                   
                    entry.target.classList.add("show");
                   
                }
            });
        }, { rootMargin: "0px 0px 200px 0px" });

        this.rightHiddenSections.forEach(section => {
            this.observer.observe(section);
        });
    }
}