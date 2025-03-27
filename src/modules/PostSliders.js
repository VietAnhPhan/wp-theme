import Glide from "@glidejs/glide";

class PostSlider{
    constructor() {
        if (document.querySelector(".bao-gia-dv")) {

          const glide = new Glide(".bao-gia-dv", {
            type: 'carousel',
            startAt:0,
            perView: 3,
            autoplay: 3000
          });

          glide.mount();
        }

        if(document.querySelector(".du-an")){

          const glide = new Glide(".du-an", {
            type: 'carousel',
            startAt:0,
            perView: 4,
            autoplay: 3000
          });

          glide.mount();

        }
      }
}

export default PostSlider;