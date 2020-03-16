<?php
	require_once( "Session.php" );
	$session = new Session();

	//Если есть данные в сессии об имени пользователя:
	if (!empty($_SESSION['country'])) {
		
		echo $session->select('country'); //выведем имя на экран
	}
	
?>