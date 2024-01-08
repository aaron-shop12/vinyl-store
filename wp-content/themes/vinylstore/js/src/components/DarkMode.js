import * as Cookies from 'es-cookie';

export class DarkMode {
    async init() {
        //Dark / Light mode
        let themeSelected = Cookies.get('colourScheme');
        if(themeSelected) {
            //console.log('selected');
            if(themeSelected == 'lightMode') {
                document.getElementById('body').classList.remove('darkMode');
                document.getElementById('body').classList.add('lightMode');
                 document.getElementById('lightMode').classList.add('active');
            } else {
                document.getElementById('body').classList.remove('lightMode');
                document.getElementById('body').classList.add('darkMode');
                document.getElementById('darkMode').classList.add('active');
            }
        } else {
            if(window.matchMedia('(prefers-color-scheme: dark)').matches) {
                //console.log('dark');
                document.getElementById('darkMode').classList.add('active');
                document.getElementById('body').classList.add('darkMode');
            } else {
                //console.log('light');
                 document.getElementById('lightMode').classList.add('active');
                 document.getElementById('body').classList.add('lightMode');
            }
        }

         document.addEventListener('click', function (event) {
             if(!event.target.classList.contains('themeSelection')) return;
             event.preventDefault();
             if(event.target.classList.contains('active')) {

             } else {
                 var links = document.querySelectorAll('.themeSelection.active');
                 for (var i = 0; i < links.length; i++) {
                     links[i].classList.remove('active');
                 }
                 event.target.classList.add('active');
                 let id = event.target.id;
                 if(id == 'lightMode') {
                     document.getElementById('body').classList.remove('darkMode');
                     document.getElementById('body').classList.add('lightMode');
                 } else {
                     document.getElementById('body').classList.remove('lightMode');
                     document.getElementById('body').classList.add('darkMode');
                 }
                 let twoHoursFromNow = new Date();
                 twoHoursFromNow.setHours(twoHoursFromNow.getHours() + 2);
                 Cookies.set('colourScheme', id, { expires: twoHoursFromNow });
                 //console.log(id);
             }
         });
    }
}
