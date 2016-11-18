$(document).ready(function () {
    $(".popup").magnificPopup();
    $("#mask").inputmask({
        "mask":"+375 (99) 999-9999"
    });

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
    });

    var btn = $('.button');

    function Test() {
        window.d = $(btn).data('date');
    }
    btn.on('click',Test);
    Test();
    console.log(d);


    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("#form").submit(function() {
     /*   var formID = $(this).attr('id');
        var formNm = $('#' + formID);*/
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            setTimeout(function() {
                $.magnificPopup.close();
                $('.bs-example-modal-sm').modal();
                $("#form").trigger("reset");
            }, 500);

        });
        return false;
    });
});
