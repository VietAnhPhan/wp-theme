export class Carousel {
    constructor() {

        this.slide = document.querySelector(".slides");
        this.slideItems = Array.from(this.slide.querySelectorAll(".slide"));
        this.nextButton = document.querySelector(".arrow-navigation__next");
        this.prevButton = document.querySelector(".arrow-navigation__prev");
        this.index = 0;
        this.range = 0;
        // this.nextImage();
        // this.prevImage();


        this.carousels = document.querySelectorAll(".carousel");
        this.carousels.forEach(carousel => {
            const track = carousel.querySelector(".carousel-track");
            const items = track.querySelectorAll(".carousel-item");
            let index = 0 ;
            carousel.querySelector(".next").addEventListener("click", () => {
                index = (index + 1) % items.length; // Loop back to start
                this.updateCarousel(track, items, index);
            
            });

            carousel.querySelector(".prev").addEventListener("click", () => {
                index = (index - 1) % items.length; // Loop back to start
                this.updateCarousel(track, items, index);
            });
        });

        // this.translateToLeft();

    }

    // nextImage() {
    //     // console.log(this.nextButton);
    //     this.slideItems[this.index].setAttribute("data-source", "active");
    //     this.nextButton.addEventListener("click", () => {

    //         // console.log(this.range);
    //         if (this.index < this.slideItems.length - 1) {

    //             this.index++;
    //             // this.counter += 1;
    //             // if(this.slideItems[this.slideItems.length - 2].getAttribute("data-source") == "active"){}
    //             this.range -= 100;
    //             this.slideItems[this.index].setAttribute("data-source", "active");
    //             this.slideItems.forEach(item => {
    //                 if (item != this.slideItems[this.index]) {
    //                     item.setAttribute("data-source", "unactive");
    //                 }
    //                 item.style.transform = `translateX(${this.range}%)`;
    //             });
    //         }
    //         // if (this.slideItems[this.slideItems.length - 1].getAttribute("data-source") == "active") {

    //         //     this.range = 100;
    //         //     // this.slideItems.splice(this.slideItems.length - 2, 1);
    //         //     this.slideItems.forEach(item => {
    //         //         if (item != this.slideItems[this.slideItems.length - 2]) {
    //         //             item.style.transform = `translateX(${this.range}%)`;
    //         //         }
    //         //     });

    //         // }
    //         // else {
    //         //     this.range -= 100;
    //         //     this.slideItems[this.slideItems.length - 1].style.transform = `translateX(${this.range}%)`;
    //         //     this.slideItems.splice(this.slideItems.length - 1, 1);
    //         //     //    console.log(this.slideItems);
    //         //     this.range = 100;
    //         //     this.slideItems.forEach(item => {
    //         //         item.style.transform = `translateX(${this.range}%)`;
    //         //     });
    //         // }
    //     })

    // }

    // prevImage() {
    //     // console.log(this.nextButton);

    //     this.prevButton.addEventListener("click", () => {
    //         if (this.index > 0) {
    //             this.index--;
    //             this.range += 100;

    //             this.slideItems.forEach(item => {
    //                 item.style.transform = `translateX(${this.range}%)`;
    //             });
    //         }


    //     })

    // }

    // turnRight() {
    //     this.carousel.querySelector(".next").addEventListener("click", () => {
    //         this.index = (this.index + 1) % items.length; // Loop back to start
    //         updateCarousel();
    //     });
    // }


    // turnleft() {
    //     this.carousel.querySelector(".prev").addEventListener("click", () => {
    //         this.index = (this.index - 1) % items.length; // Loop back to start
    //         updateCarousel();
    //     });
    // }


    updateCarousel(track, items, index) {
        track.style.transform = `translateX(-${index * 300}px)`;
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