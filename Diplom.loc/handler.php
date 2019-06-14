<?php
if(isset($_POST['button'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = 'gibbz@mail.ru';
    $subject = 'client_message';
    $msg = "К вам поступило новое сообщение\n".
        "ФИО: $name\n".
        "email: $email\n".
        "тел: $phone\n".
        "Содержание заявки: $message";

    $result = mail($to, $subject, $msg);
    if($result){
        echo "Спасибо, наш специалист скоро с Вами свяжется"."<br />";
    }else{
        "Error"."<br />";
    }
}
    

?>