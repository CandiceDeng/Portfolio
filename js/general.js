//Menu toggle-effect
$(document).ready(function(){
    "use strict";
    //Hightlight current page
    var activePage = window.location.href;
    $('.menu a').each(function () {
        if (activePage == this.href) {
            $(this).closest("li").addClass("active");
        }
    });
    $(".menu-icon").on("click",function(){
        $("nav ul").toggleClass("showing");
    });
    //Ripple Effect on Subpage Title
    $('#subpage-title').ripples({
        resolution: 1000,
        dropRadius: 5, //px
        perturbance: 0.01,
    });

});

//Scrolling Effect for nav
$(window).on("scroll", function() {
    if($(window).scrollTop()) {
    $('nav').addClass('black');
    } else {
    $('nav').removeClass('black');
    }
});

