export class TransitionElement {
    constructor() {
        this.leftHiddenSections = document.querySelectorAll(".left-hidden__section");
        this.observer = null;
        this.leftToRight();
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
}