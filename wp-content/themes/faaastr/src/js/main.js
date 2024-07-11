import { TexteAnimation } from "./classes/texteAnimation.js";
import { AvisSlider } from "./classes/avisSlider.js";
import {MenuBurger} from "./classes/menuBurger.js";
import { ResizeTexteMasthead } from "./classes/resizeTexteMasthead.js"

document.addEventListener("DOMContentLoaded", (event) => {
    const texteAnimation = new TexteAnimation();
    const avisSlider = new AvisSlider();
    const menuBurger = new MenuBurger();
    const resizeTexteMasthead = new ResizeTexteMasthead();
});
