$(document).ready(function () {
    $('.parallax-window').parallax1();
    $('#scene').parallax({
        scalarX: 10,
        frictionX: 0.1,
        calibrateY: true
    });
    $('#scene2').parallax({
        scalarX: 20,
        scalarY: 10
    });
});
