import ScrollReveal from 'scrollreveal';
console.log('JavaScript est chargé !');
class ScrollRevealAnimation {
    constructor() {
        this.initScrollReveal();
    }

    initScrollReveal() {
        const sr = ScrollReveal({
            distance: '40px',
            duration: 600,
            easing: 'ease-in-out',
            reset: false,
            viewFactor: 0.1, // L'animation se déclenche quand l'élément est visible à 20% de la hauteur de la fenêtre
            origin: 'bottom',
        });

        // Sélectionner tous les éléments avec la classe 'reveal'
        const elementsSpeedFast = document.querySelectorAll('.reveal-fast');
        elementsSpeedFast.forEach((element, index) => {
            sr.reveal(element, {
                delay: index * 50 // Ajustez cette valeur selon vos besoins
            });
        });

        const elementsSpeedMedium = document.querySelectorAll('.reveal-medium');
        elementsSpeedMedium.forEach((element, index) => {
            sr.reveal(element, {
                delay: index * 200 // Ajustez cette valeur selon vos besoins
            });
        });

        const elementsSpeedLow = document.querySelectorAll('.reveal-low');
        elementsSpeedLow.forEach((element, index) => {
            sr.reveal(element, {
                delay: index * 400 // Ajustez cette valeur selon vos besoins
            });
        });
    }
}

export { ScrollRevealAnimation };
