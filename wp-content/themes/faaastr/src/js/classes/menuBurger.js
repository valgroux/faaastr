class MenuBurger {
    constructor() {
        this.burger = document.querySelector('.header__content__burger');
        this.burgerBtn = document.querySelector('.header__content__burger__btn');
        this.addEventListeners();
    }

    addEventListeners() {
        if (this.burgerBtn) {
            this.burgerBtn.addEventListener('click', () => {
                this.burger.classList.toggle('open');
            });
        } else {
            console.error('Burger button not found');
        }
    }
}

export { MenuBurger };
