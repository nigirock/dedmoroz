<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* формы заказать */
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST['mail'])) {
        $email = $_POST['mail'];
    }
    if (isset($_POST['text_disabled'])) {
        $text_disabled = $_POST['text_disabled'];
    }
    /* формы услуги */
    if (isset($_POST['name4'])) {
        $name4 = $_POST['name4'];
    }
    if (isset($_POST['phone4'])) {
        $phone4 = $_POST['phone4'];
    }
    if (isset($_POST['mail4'])) {
        $email4 = $_POST['mail4'];
    }
    if (isset($_POST['hidden_check_text'])) {
        $hidden_check_text = $_POST['hidden_check_text'];
    }
    /* форма header*/
    if (isset($_POST['name1'])) {
        $name1 = $_POST['name1'];
    }
    if (isset($_POST['phone1'])) {
        $phone1 = $_POST['phone1'];
    }
    /* форма принять участие */
    if (isset($_POST['name2'])) {
        $name2 = $_POST['name2'];
    }
    if (isset($_POST['phone2'])) {
        $phone2 = $_POST['phone2'];
    }
    /* форма footer */
    if (isset($_POST['email3'])) {
        $email3 = $_POST['email3'];
    }
    if (isset($_POST['text3'])) {
        $text3 = $_POST['text3'];
    }
    /* форма отзывы */
    if (isset($_POST['name_otziv'])) {
        $name_otziv = $_POST['name_otziv'];
    }
    if (isset($_POST['stars'])) {
        $stars = $_POST['stars'];
    }
    if (isset($_POST['text_otziv'])) {
        $text_otziv = $_POST['text_otziv'];
    }


    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['text_disabled'])) {
        $message = "<h1 style='color: #00b3ee;font-style: italic'>Заявка</h1> <h3 style='color:blue'>Имя: $name</h3> <h3 style='color: green'>Телефон: $phone</h3> <h3 style='color: orange'>E-mail: $email</h3> <h3 style='black: orange'>Дата: $text_disabled</h3>";

        if (isset($_POST['name1']) && isset($_POST['phone1'])) {
            $message = "<h1 style='color: #00b3ee;font-style: italic'>Заказ новогоднего поздравления</h1> <h3 style='color:blue'>Имя: $name1</h3> <h3 style='color: green'>Телефон: $phone1</h3>";

            if (isset($_POST['name2']) && isset($_POST['phone2'])) {
                $message = "<h1 style='color: #00b3ee;font-style: italic'>Получить индивидуальный номер</h1> <h3 style='color:blue'>Имя: $name2</h3> <h3 style='color: green'>Телефон: $phone2</h3>";

                if (isset($_POST['email3']) && isset($_POST['text3'])) {
                    $message = "<h1 style='color: #00b3ee;font-style: italic'>Остались вопросы</h1> <h3 style='color: orange'>E-mail: $email3</h3> <h3 style='color: green'>Сообщение: $text3</h3>";

                    if (isset($_POST['name4']) && isset($_POST['phone4']) && isset($_POST['mail4']) && isset($_POST['hidden_check_text'])) {
                        $message = "<h1 style='color: #00b3ee;font-style: italic'>Заявка</h1> <h3 style='color:blue'>Имя: $name4</h3> <h3 style='color: green'>Телефон: $phone4</h3> <h3 style='color: orange'>E-mail: $email4</h3> <h3 style='black: orange'>Дополнительные услуги: $hidden_check_text</h3>";

                        if (isset($_POST['name_otziv']) && isset($_POST['text_otziv']) && isset($_POST['stars'])) {
                            $message = "<h1 style='color: #00b3ee;font-style: italic'>Новый отзыв</h1> <h3 style='color:blue'>Имя: $name_otziv</h3> <h3 style='color: green'>Отзыв: $text_otziv</h3><h3 style='black: orange'>Оценка: $stars </h3>";

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
                }
            }
        }
    }
}
?>

