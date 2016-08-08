/**
 * Created by bberger on 22.04.2016.
 */
$(window).scroll(function() {
    var mainnav = $("#mainnavigationcontainer");
    var height = $(window).scrollTop();
    var fixedState = 0;

    if( height > 196 && fixedState == 0) {
        mainnav.addClass("navbar-fixed-top");
        fixedState = 1;
    } else {
        mainnav.removeClass("navbar-fixed-top");
        fixedState = 0;
    }
});



$(document).ready(function() {
    jQuery(document).ready(function ($) {
        $('a[data-rel^=lightcase]').lightcase();
    });
});