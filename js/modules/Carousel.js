export class Carousel {
    constructor() {

        this.slide = document.querySelector(".slides");
        this.slideItems = Array.from(this.slide.querySelectorAll(".slide"));
        this.nextButton = document.querySelector(".arrow-navigation__next");
        this.prevButton = document.querySelector(".arrow-navigation__prev");
        this.counter = 0;
        this.range = 0;
        this.nextImage();
        this.prevImage();

        // this.translateToLeft();

    }

    nextImage() {
        // console.log(this.nextButton);

        this.nextButton.addEventListener("click", () => {
            // this.counter += 1;
            this.range -=100;

            this.slideItems.forEach(item => {
                item.style.transform = `translateX(${this.range}%)`;
            });

        })

    }

    prevImage() {
        // console.log(this.nextButton);

        this.prevButton.addEventListener("click", () => {
            this.range += 100;

            console.log(this.range)
            this.slideItems.forEach(item => {
                item.style.transform = `translateX(${this.range}%)`;
            });

        })

    }



    translateToLeft() {
        const slideItems = Array.from(this.slide.querySelectorAll(".slide"));
        let index = slideItems.length;
        slideItems.forEach(item => {
            item.style.zIndex = index;
            index--;
        });
        function loopItems() {
            slideItems.forEach(item => {
                setTimeout(() => {
                    item.style.transform = "translateX(-100%)";
                    // item.style.animationName="shift-to-left";
                }, 3000);
            })
            // slideItems[index].style.transform = "translateX(0)";

            // index = (index+1)% slideItems.length;

        }
        loopItems();
        // setInterval(loopItems, 1000);
    }

}