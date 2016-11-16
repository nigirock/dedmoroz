$(document).ready(function () {

    $('.parallax-window').parallax1({
        naturalWidth: 1920,
        naturalHeight: 960,
        speed: 0.05
    });
    $("#owl-example").owlCarousel({
        items : 3,
        autoPlay : 4000,
        lazyLoad : true
      });
    $('#scene').parallax({
        scalarX: 10,
        frictionX: 0.1,
        calibrateY: true
    });
    $('#scene2').parallax({
        scalarX: 20,
        scalarY: 10
    });
    $("#input-id").rating();
    $("#input-id1").rating({
        clearButton:'<span></span>'
    });
    $('#input-id').on('rating.change', function(event, value, caption) {
        console.log(value);
        console.log(caption);
    })
    var price = $('.price_td').text();
    var date = $('.date_td').text();
    console.log(date + " " + price);
});
