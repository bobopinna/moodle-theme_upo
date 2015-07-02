function scroll() {
    navbarcontentwidth = Y.one('.navbar .brand').get('clientWidth')
                        +Y.one('.navbar .nav-collapse .nav').get('clientWidth')
                        +Y.one('.navbar .logoupo').get('clientWidth');
    bodywidth = Y.one('body').get('clientWidth');

    if (((window.pageYOffset > yoffset) || (navbarcontentwidth > bodywidth)) || (bodywidth <= 979)) {
        navbar.removeClass('biglogo');
        page.removeClass('biglogo');
    } else {
        navbar.addClass('biglogo');
        page.addClass('biglogo');
    }

    custommenutop = 0;
    if (bodywidth > 979) {
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
