import {Search} from "./modules/Search.js";
import { Carousal } from "./modules/Carousal.js";
import { TransitionElement } from "./modules/TransitionElements.js";

const search = new Search();
// const carousal = new Carousal();
document.addEventListener("DOMContentLoaded", () => {
    new TransitionElement();
});
