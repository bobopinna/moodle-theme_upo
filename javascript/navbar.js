function scroll() {
    navbarcontentwidth = Y.one('.navbar .brand').get('clientWidth')+Y.one('.navbar .nav').get('clientWidth')+Y.one('.navbar .nav-collapse .nav').get('clientWidth');

    if (((window.pageYOffset > yoffset) && (navbarcontentwidth < window.innerWidth)) || (window.innerWidth < 979)) {
        navbar.removeClass('biglogo');
        Y.one('.navbar .nav-collapse').setStyle('marginTop', '0px');
        page.removeClass('biglogo');
    } else {
        navbar.addClass('biglogo');
        Y.one('.navbar .nav-collapse').setStyle('marginTop', '39px');
        page.addClass('biglogo');
    } 
}

var navbar = Y.one('.navbar');
var page = Y.one('#page');
var yoffset = navbar.get('clientHeight');

window.onscroll = scroll;
window.onresize = scroll;

scroll();
