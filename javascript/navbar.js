function scroll() {
    navbarcontentwidth = Y.one('.navbar .brand').get('clientWidth')+Y.one('.navbar .nav').get('clientWidth')+Y.one('.navbar .nav-collapse .nav').get('clientWidth');

    if (((window.pageYOffset > yoffset) && (navbarcontentwidth < window.innerWidth)) || (window.innerWidth <= 979)) {
        navbar.removeClass('biglogo');
        page.removeClass('biglogo');
    } else {
        navbar.addClass('biglogo');
        page.addClass('biglogo');
    }

    custommenutop = 0;
    if (window.innerWidth > 979) {
        navbarcontentheight = Y.one('.navbar .brand').get('clientHeight');
        custommenutop = navbarcontentheight - Y.one('.navbar .nav-collapse').get('clientHeight');
    }
    Y.one('.navbar .nav-collapse').setStyle('marginTop', custommenutop+'px');
}

var navbar = Y.one('.navbar');
var page = Y.one('#page');
var yoffset = navbar.get('clientHeight');

window.onscroll = scroll;
window.onresize = scroll;

scroll();
