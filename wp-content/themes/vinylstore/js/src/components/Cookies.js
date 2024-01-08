import * as Cookies from 'es-cookie';

export class CookiesInit {
    async init() {
        // Cookies
        //Cookies.remove('siteLoad');
        if(Cookies.get('siteLoad') == 'first') {
            //console.log('test');
        } else {
          //console.log('test');
          let twoHoursFromNow = new Date();
          twoHoursFromNow.setHours(twoHoursFromNow.getHours() + 2);
          Cookies.set('siteLoad', 'first', { expires: twoHoursFromNow });
          document.getElementById('cookieTest').style.display = "block";
        }
    }
}
