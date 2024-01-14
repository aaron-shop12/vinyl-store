export class UtilsInit {
    async init() {
        // Mobile Menu Level One
        document.querySelectorAll('.mobileMenu .container .menu-container ul li.menu-item-has-children > a').forEach( link => {
            link.onclick = function (event) {
                event.preventDefault();
                console.log(link);
                var parent = link.parentElement;
                //console.log(parent);
                if(parent.classList.contains('active')) {
                    parent.classList.remove('active');
                } else {
                    parent.classList.add('active');
                }
            }
        });

        var mobileMenuBtn = document.getElementById("mobileNav");
        var subBtn = mobileMenuBtn.firstElementChild;
        var mobileMenu = document.getElementById("mobileMenu");
        var subContainer = mobileMenu.firstElementChild;
        mobileMenuBtn.addEventListener('click', function (event) {
            event.preventDefault();
            if(mobileMenu.classList.contains('active')) {
                //header.classList.remove('active');
                subContainer.classList.remove('active');
                subBtn.classList.remove('active');
                setTimeout(function() {
                    mobileMenu.classList.remove('active');
                }, 0);    
                document.body.classList.remove('inactive');
            } else {
                //header.classList.add('active');
                mobileMenu.classList.add('active');
                subBtn.classList.add('active');
                document.body.classList.add('inactive');
                setTimeout(function() {
                    subContainer.classList.add('active');
                }, 300);
            }
        });

        var mobileMenuClose = document.getElementById("mobileNavClose");
        mobileMenuClose.addEventListener('click', function (event) {
            event.preventDefault();
            subContainer.classList.remove('active');
            subBtn.classList.remove('active');
            setTimeout(function() {
                mobileMenu.classList.remove('active');
            }, 0);    
            document.body.classList.remove('inactive');
        });

        // Search form
        var headerSearch = document.getElementById("headerSearch");
        var searchForm = document.getElementById("searchwp-form-1");
        headerSearch.addEventListener('click', function (event) {
            event.preventDefault();
            if(headerSearch.classList.contains('active')) {
                searchForm.classList.remove('active');
                headerSearch.classList.remove('active');
            } else {
                searchForm.classList.add('active');
                headerSearch.classList.add('active');
            }
        });

        // Back to top 
        var backTop = document.getElementById("backTop");
        backTop.addEventListener('click', function (event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }
}