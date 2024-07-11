class ResizeTexteMasthead {
    constructor() {
        this.breakpoint = 768;
        this.projectLink = document.querySelector('.masthead .cta a');
        this.methodLink = document.querySelector('.masthead .cta-secondaire a');
        this.originalProjectText = 'Tu as un projet ? Parlons en';
        this.responsiveProjectText = 'Tu as un projet ?';
        this.originalMethodText = 'Découvre notre méthode';
        this.responsiveMethodText = 'Notre méthode';

        // Bind the context of `this` for the method `resizeHandler`
        this.resizeHandler = this.resizeHandler.bind(this);

        // Initial check
        this.updateText();

        // Add resize event listener
        window.addEventListener('resize', this.resizeHandler);
    }

    resizeHandler() {
        this.updateText();
    }

    updateText() {
        if (window.innerWidth <= this.breakpoint) {
            if (this.projectLink) this.projectLink.textContent = this.responsiveProjectText;
            if (this.methodLink) this.methodLink.textContent = this.responsiveMethodText;
        } else {
            if (this.projectLink) this.projectLink.textContent = this.originalProjectText;
            if (this.methodLink) this.methodLink.textContent = this.originalMethodText;
        }
    }
}

// Instantiate the class when DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    new ResizeTexteMasthead();
});

export { ResizeTexteMasthead };
