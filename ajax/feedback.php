<?php 
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
if($name == '' || $email == '' || $subject =='' || $message== ''){
echo 'Заполните все поля';
}


	// формируем расширенные заголовки
	           $headers = 'From: hebni804@gmail.com' . "\r\n" . 
	            $name . "\r\n" .
				$email . "\r\n" ;  
	
if(mail("hebni804@gmail.com", $subject, $message, $headers, $email))
	echo "Сообщение отправлено";
else
	echo "Сообщение не отправлено";
	
   
?>
<?php
 $to = $email;
	$subject = $subject; 
	$message = 'Здравствуйте, уважаемый клиент, с вами свяжуться в ближайшее время, по поводу вашего вопроса, ожидайте ответа.'; 

	// формируем расширенные заголовки
	$headers = 'From: hebni804@gmail.com' . "\r\n" .    
				'Reply-To: noreply@unverified.beget.ru' . "\r\n" .    
	
    mail($to,$subject, $message, $headers); 
?>
   