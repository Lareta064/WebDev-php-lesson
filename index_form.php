<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Method POST</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="index_form.php" method="POST" class="form">
		<h2> Заполните форму</h2>
		<input type="name"  name="name" class="name-field" placeholder="Введите Ваше имя">
		<input type="email"  name="email" class="email-field" placeholder="Введите Ваш email">
		<textarea name="message" id="" cols="30" rows="5" placeholder="Ваше сообщение"></textarea>
		<input type="submit" class="btn" value="Отправить">
	</form>

	<?php 
		
		if(!empty($_POST)){

			$message = "Получено сообщение с сайта site.ru \n" 
						. "Имя отправителя:" . $_POST['name'] ."\n"
						. "Email отправителя:" . $_POST['email'] ."\n"
						. "Сообщение отправителя:" . $_POST['message'];
			$headers = "From: info@mysite.ru";

			$result = mail("lareta064@gmail.com", "Сообщение с сайта", $message, $headers);
			
			if($result){

				echo "<h3 class='success'>Ваше сообщение успешно отправлено!</h3>";
				
			} else {
				echo "<h3 class='not-success'>Что-то пошло не так! Ваше сообщение не отправлено!</h3>";
			}	
		}
		

	 ?>
</body>
</html>


