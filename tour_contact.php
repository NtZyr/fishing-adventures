<?php

if($_POST) {
    if($_POST['name'] && $_POST['phone']) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $to = '<whereto@email.here>';

        $subject = 'Рыболовные приключения | Заказ тура';

        $message = "Имя: $name.\n";
        $message .= "Телефон: $phone.";

        $headers .= "From: <server@email.here>\r\n";
        $headers .= "Reply-To: server@email.here\r\n";

        mail($to, $subject, $message, $headers);

        header('Location: /');
    } else {
        echo 'Вернитесь и заполните форму!';
    }
}