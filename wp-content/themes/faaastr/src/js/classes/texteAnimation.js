import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

class TexteAnimation {
    constructor() {
        this.initObserver('.swiper1', false); // Left to right
        this.initObserver('.swiper2', true);  // Right to left
    }

    initObserver(selector, reverseDirection) {
        const swiperElement = document.querySelector(selector);
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.initSwiper(swiperElement, reverseDirection);
                    observer.unobserve(swiperElement);
                }
            });
        }, {
            threshold: 0.1 // Trigger when 10% of the element is visible
        });
        observer.observe(swiperElement);
    }

    initSwiper(element, reverseDirection) {
        new Swiper(element, {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3, // Default slides per view
            spaceBetween: 0,
            speed: 4000, // Transition speed in ms
            autoplay: {
                delay: 0, // Very short delay between transitions
                disableOnInteraction: false, // Continue autoplay after interaction
                reverseDirection: reverseDirection, // Change direction
            },
            breakpoints: {
                315: {
                    slidesPerView: 2, // 2 slides per view for screens 690px and larger
                },
                700:{
                    slidesPerView:3
                }
            },
            allowTouchMove: false, // Disable swiping for continuous scroll
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new TexteAnimation();
});

export { TexteAnimation };
