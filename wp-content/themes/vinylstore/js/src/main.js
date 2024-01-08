import { DarkMode } from './components/DarkMode';
import { Accordion } from './components/Accordion';
import { ImageSlider } from './components/ImageSlider';
import { Lightbox } from './components/Lightbox';
import { CookiesInit } from './components/Cookies';
import { UtilsInit } from './components/Utils';

let Main = {
  init: async function () {

      //const darkModeInit = new DarkMode();
      //await darkModeInit.init();

      const accordionInit = new Accordion();
      await accordionInit.init();

      const imageSliderInit = new ImageSlider();
      await imageSliderInit.init();

      const lightboxInit = new Lightbox();
      await lightboxInit.init();

      //const cookiesInit = new CookiesInit();
      //await cookiesInit.init();

      const utilsInit = new UtilsInit();
      await utilsInit.init();

      //console.log('test');
  }
};

Main.init();
