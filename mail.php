<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*$recepient = "nigirock124@gmail.com";
    $sitename = "Чистый слон";

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $message = "Имя: $name \nСообщение: $phone";

    $pagetitle = "Новый отзыв с сайта";
    mail($recepient,$pagetitle,$message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");*/

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['mail'])) {
        $email = $_POST['mail'];
    }


    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail'])) {
        $message = "<h1 style='color: #00b3ee;font-style: italic'>Получить 7 советов</h1> <h3 style='color:blue'>Имя: $name</h3> <h3 style='color: green'>Телефон: $phone</h3> <h3 style='color: orange'>E-mail: $email</h3>";


        $to = "nigirock124@gmail.com";
        $headers = "Content-type: text/html; charset = utf-8";
        $subject = "Профессиональная установка ограждения и кровли";
        $send = mail($to, $subject, $message, $headers);
        if ($send == 'true') {
            echo "<center>Спасибо за отправку вашего сообщения!</center>";
        } else {
            echo "<center><b>Ошибка. Сообщение не отправлено!</b></center>";
        }
    } else {
        http_response_code(403);
        echo "Попробуйте еще раз";
    }
}
?>
