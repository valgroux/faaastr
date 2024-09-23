import { TexteAnimation } from "./classes/texteAnimation.js";
import { AvisSlider } from "./classes/avisSlider.js";
import { MenuBurger } from "./classes/menuBurger.js";
import { ResizeTexteMasthead } from "./classes/resizeTexteMasthead.js";
import { ScrollRevealAnimation } from "./classes/scrollRevealAnimation.js";

document.addEventListener("DOMContentLoaded", (event) => {
    const menuBurger = new MenuBurger();
    // const texteAnimation = new TexteAnimation();
    const avisSlider = new AvisSlider();
    const resizeTexteMasthead = new ResizeTexteMasthead();
    const scrollRevealAnimation = new ScrollRevealAnimation();

    // Vérifiez si vous êtes sur la page d'accueil
    // if(document.body.classList.contains('home')){
    //     const texteAnimation = new TexteAnimation();
    // }      
    
});
