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

//About Page Media Gallery Filter
  var $grid = $('.img-grid').isotope({
    itemSelector: '.img-container',
    //layoutMode: 'fitRows',
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {

    },
  };

  // bind filter button click
  $('#filter-btn').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

/*******Popup Image Gallary in Porfolio*******/

$('.popup-gallery').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});

