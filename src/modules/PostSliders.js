import Glide from "@glidejs/glide";

class PostSlider {
  constructor() {
    if (document.querySelector(".bao-gia-dv")) {

      const glide = new Glide(".bao-gia-dv", {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        breakpoints: {
          600: { perView: 1 },
          768: { perView: 2 }
        },
        autoplay: 3000
      });

      glide.mount();
    }

    if (document.querySelector(".du-an")) {

      const glide = new Glide(".du-an", {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        breakpoints: {
          600: { perView: 1 },
          768: { perView: 2 }
        },
        autoplay: 3000
      });

      glide.mount();

    }

    if (document.querySelector(".tin-tuc__glide")) {
      const glide = new Glide(".tin-tuc__glide", {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        breakpoints: {
          600: { perView: 1 },
          768: { perView: 2 }
        },
        autoplay: 3000
      });

      glide.mount();
    }

    if (document.querySelector(".glide__customer-review")) {
      const glide = new Glide(".glide__customer-review", {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        breakpoints: {
          600: { perView: 1 },
          768: { perView: 2 }
        },
        autoplay: 3000
      });

      glide.mount();
    }
  }
}


export default PostSlider;