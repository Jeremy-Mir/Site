<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $usernumber = test_input($_POST['usernumber']);
    $useraddress = test_input($_POST['useraddress']);
    $usermail = test_input($_POST['usermail']);
    $question = test_input($_POST['question']);
}
    $message = '<div><label >Имя: ' . $username . '</label></div>';
    $message .= '<div><label >Телефон: ' . $usernumber . '</label></div>';
	$message .= '<div><label >Адрес: ' . $useraddress . '</label></div>';
	$message .= '<div><label >Почта: ' . $usermail . '</label></div>';
    if(!empty($question )) {
        $message .= '<div><label >Текст: ' . $question  . '</label></div> ';

    }
    $mailTo = "eremei.mironoff@yandex.ru"; 
    $subject = "Письмо с сайта";
    


       /* if(mail($mailTo, $subject, $message, )) {
        echo $message; 
    } else {
        
        echo "Не удалось отправить сообщение..."; 
        echo $message; 
    }*/
    $strSQL = "INSERT INTO `mail`(`name`, `number`, `address`, `mail`, `text`) VALUES ('$username','$usernumber','$useraddress','$usermail','$question')";
    
    $connect = mysqli_connect('localhost','cp75453_bd','33Rfrfle','cp75453_bd');
    mysqli_query($connect,"SET NAMES 'utf8'");
    if ($connect == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    mysqli_query($connect,$strSQL) or die (mysqli_error($connect,$strSQL));


?>
