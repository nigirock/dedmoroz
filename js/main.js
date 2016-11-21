$(document).ready(function () {
    $(".popup").magnificPopup();
    $("#mask, #mask1, #mask2, #mask3").inputmask({
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


    var text = $('#text-input'),
        box = $('.my-checkbox');
    box.on('click change', function() {
        var values = [];
        box.filter(':checked').each(function() {
            values.push(this.value);
        });
        console.log((this.value));
        text.val(values.join(','));
        $("#form_usluga").submit(function() {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $(this).serialize()
            }).done(function() {
                setTimeout(function() {
                    $.magnificPopup.close();
                    $('.bs-example-modal-sm').modal();
                    $("#form_usluga").trigger("reset");
                }, 500);

            });
            return false;
        });
    });

    var btn = $('.button');
    btn.on('click',function () {
        var d = $(this).data('date');
        var dis = $('.text_disabled');
        dis.val(d);
        $("#form").submit(function() {
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


    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $("#form_otzivi").submit(function() {
        $('#input-id').on('rating.change', function(event, value, caption) {
            console.log(value);
            console.log(caption);
        });
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            setTimeout(function() {
                $.magnificPopup.close();
                $('.bs-example-modal-sm').modal();
                $("#form_otzivi").trigger("reset");
            }, 500);

        });
        return false;
    });
    $("#form1,#form2,#form3").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            setTimeout(function() {
                $.magnificPopup.close();
                $('.bs-example-modal-sm').modal();
                $("#form1,#form2,#form3").trigger("reset");
            }, 500);

        });
        return false;
    });
});
