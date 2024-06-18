import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

class AvisSlider{
    constructor(){
        var swiper = new Swiper('.js-avis', {
			slidesPerView: 1,
			loop:true,
            speed: 2000,
			autoHeight: false,
            effect:'slide',
            autoplay: {
                delay: 4000,
            },
			navigation: {
				nextEl: ".avis__content__left__arrow__left",
				prevEl: ".avis__content__left__arrow__right",
			},
		})
    }
}

export {AvisSlider}