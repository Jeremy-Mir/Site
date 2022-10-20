<?php

  $subject = "Тема сообщения";
  $message = "Message, сообщение!";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(isset($_POST["username"])){
			
			$name 		=trim(strip_tags($_POST["username"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$number 	= trim(strip_tags($_POST["usernumber"]));
		}
		if(isset($_POST["useraddress"]))
		{
			$address 	= trim(strip_tags($_POST["useraddress"]));
		}
		if(isset($_POST["usernumber"]))
		{
			$mail 	= trim(strip_tags($_POST["usermail"]));
		}
		if (isset( $_POST["question"])) {
			$question 	= trim(strip_tags("question"));
		}
			
			$message  = "<html>";
				$message  .= "<body>";
				$message  .= "Имя: ".$name;
				$message  .= "<br />";
				$message  .= "Телефон: ".$number;
				$message  .= "<br />";
				$message  .= "Адрес: ".$address;
				$message  .= "<br />";
				$message  .= "Адрес почты: ".$mail;
				$message  .= "<br />";
				$message  .= "Вопрос: ".$question;
				$message  .= "</body>";
			$message  .= "</html>";
			
			mail ('yerem01@mail.ru', $subject, $message, $headers);
}

else
{
	exit;
} 

?>