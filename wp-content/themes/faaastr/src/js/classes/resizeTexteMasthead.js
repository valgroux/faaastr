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
        window.addEventListener('resize', this.debounce(this.resizeHandler, 200));
    }

    // Debounce function to limit the rate at which the resize handler is called
    debounce(func, delay) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }

    resizeHandler() {
        this.updateText();
    }

    updateText() {
        const textToUpdate = window.innerWidth <= this.breakpoint ? {
            project: this.responsiveProjectText,
            method: this.responsiveMethodText,
        } : {
            project: this.originalProjectText,
            method: this.originalMethodText,
        };

        if (this.projectLink) this.projectLink.textContent = textToUpdate.project;
        if (this.methodLink) this.methodLink.textContent = textToUpdate.method;
    }
}

// Instantiate the class when DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    new ResizeTexteMasthead();
});

export { ResizeTexteMasthead };