export class Accordion {
    async init() {
        // Accordion
        document.addEventListener('click', function (event) {
            if(!event.target.classList.contains('accordion-title')) return;
            //console.log('click');
            //console.log(event.target.nextElementSibling);
            if(event.target.classList.contains('active')) {
                event.target.classList.remove('active');
                event.target.nextElementSibling.style.display = "none";
            } else {
                event.target.classList.add('active');
                event.target.nextElementSibling.style.display = "block";
            }
        });
    }
}
