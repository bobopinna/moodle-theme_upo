function upo_navbar_update() {
    navbar = Y.one('.navbar');
    page = Y.one('#page');
    navbarbutton = Y.one('.navbar .btn-navbar');

    yoffset = navbar.get('clientHeight');
    bodywidth = Y.one('body').get('clientWidth');

    biglogo = true;

    // Is scroll position near page top?
    if (window.pageYOffset > yoffset) {
        biglogo = false;
    }

    // Is there enough room for all navbar contents?
    navbarcontentwidth = 0; 
    navbarcontentwidth += parseInt(Y.one('.navbar .container-fluid').getComputedStyle('margin-left'));
    navbarcontentwidth += parseInt(Y.one('.navbar .container-fluid').getComputedStyle('padding-left'));
    navbarcontentwidth += Y.one('.navbar .brand').get('clientWidth');
//    navbarcontentwidth += Y.one('.navbar .logoupo').get('clientWidth');
    navbarcontentwidth += parseInt(Y.one('.navbar .container-fluid').getComputedStyle('padding-right'));
    navbarcontentwidth += parseInt(Y.one('.navbar .container-fluid').getComputedStyle('margin-right'));
    if (navbarbutton.getComputedStyle('display') == 'none') {
        navbarcontentwidth += Y.one('.navbar .nav-collapse .nav').get('clientWidth');
    } else {
        navbarcontentwidth += navbarbutton.get('clientWidth');
        // Small screen > Small logos
        biglogo = false;
    }
    if (navbarcontentwidth > bodywidth) {
        biglogo = false;
        // Is width reduced?
       if (oldbodywidth < bodywidth) {
            biglogo = true;
       }
    }
    oldbodywidth = bodywidth;

    if (biglogo) {
        navbar.addClass('biglogo');
        page.addClass('biglogo');
    } else {
        navbar.removeClass('biglogo');
        page.removeClass('biglogo');
    }

    // Set top margin for custom menus
    custommenutop = 0;
    if (navbarbutton.getComputedStyle('display') == 'none') {
        // Calculate the right top margin for custom menus
        navbarcontentheight = Y.one('.navbar .brand').get('clientHeight');
        custommenutop = navbarcontentheight - Y.one('.usermenu').get('clientHeight');
    }
    Y.one('.menubar').setStyle('marginTop', custommenutop+'px');
}

var oldbodywidth = Y.one('body').get('clientWidth');

//window.onscroll = upo_navbar_update;
//window.onresize = upo_navbar_update;

//upo_navbar_update();
