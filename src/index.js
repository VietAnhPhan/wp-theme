import "normalize.css"; // Import normalize.css
import "../css/styles.css"; // Import your main CSS file
import '@glidejs/glide/dist/css/glide.core.min.css';
import '@glidejs/glide/dist/css/glide.theme.min.css';


import Counter from "./modules/Counter.js";
import Scroll from "./modules/Scroll.js";
import MobileMenu from "./modules/MobileMenu.js";
import Search from "./modules/Search.js";
import PostSlider from "./modules/PostSliders.js";

// const counter = new Counter();
const scroll = new Scroll();
const mobilemenu = new MobileMenu();
const search = new Search();
const postSlider = new PostSlider();
// const countrer = new Counter();