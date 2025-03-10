import {Search} from "./modules/Search.js";
import { Carousel } from "./modules/Carousel.js";
import { TransitionElement } from "./modules/TransitionElements.js";

const search = new Search();
const carousel = new Carousel();
document.addEventListener("DOMContentLoaded", () => {
    new TransitionElement();
});
