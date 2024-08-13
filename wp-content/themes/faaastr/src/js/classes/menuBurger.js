class MenuBurger {
    constructor() {
        this.burger = document.querySelector('.header__content__burger');
        this.burgerBtn = document.querySelector('.header__content__burger__btn');
        this.menuLinks = document.querySelectorAll('.header__content__burger__wrapper a'); // Sélecteur pour les liens du menu
        this.addEventListeners();
    }

    addEventListeners() {
        // Écouteur pour le bouton burger
        if (this.burgerBtn) {
            this.burgerBtn.addEventListener('click', () => {
                this.burger.classList.toggle('open');
            });
        } else {
            console.error('Burger button not found');
        }

        // Écouteur pour les liens du menu
        if (this.menuLinks.length > 0) {
            this.menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    this.closeMenu();
                });
            });
        } else {
            console.error('Menu links not found');
        }
    }

    closeMenu() {
        this.burger.classList.remove('open');
    }
}

export { MenuBurger };
