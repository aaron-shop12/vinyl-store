import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper';
import 'swiper/css/bundle';

export class ImageSlider {
    async init() {
        // Slider
       const swiper = new Swiper('.swiper', {
           modules: [Navigation, Pagination, Autoplay, EffectFade],
           // Optional parameters
           speed: 800,
           spaceBetween: 30,
           effect: 'slide',
           fadeEffect: {
               crossFade: true
           },
           autoplay: {
               delay: 100000,
           },
           keyboard: {
               enabled: true,
               onlyInViewport: false,
           },
           a11y: {
               prevSlideMessage: 'Previous slide',
               nextSlideMessage: 'Next slide',
           },
           // If we need pagination
           pagination: {
               el: '.swiper-pagination',
               type: 'bullets',
               clickable: true
           },
           // Navigation arrows
           navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
           },
           breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 30
                }
           }
       });
    }
}
