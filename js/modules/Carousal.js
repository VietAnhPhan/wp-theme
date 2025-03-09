export class Carousal {
    constructor() {

        this.slide = document.querySelector(".slides");

        this.translateToLeft();

    }

    translateToLeft() {
        const slideItems = Array.from(this.slide.querySelectorAll(".slide"));
        let index = slideItems.length;
        slideItems.forEach(item =>{
            item.style.zIndex=index;
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