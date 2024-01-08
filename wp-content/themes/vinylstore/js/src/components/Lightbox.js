import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

export class Lightbox {
    async init() {
        // Lightbox
        const lightbox = GLightbox({
           openEffect: 'none',
           closeEffect: 'none'
        });
    }
}
