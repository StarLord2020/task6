<?php
	require_once("../Session.php" );
	if (!empty($_REQUEST['city'])&&!empty($_REQUEST['age'])) {

		$sesion = new Session();
		$sesion -> save('city',$_REQUEST['city']);
        $sesion -> save('age',$_REQUEST['age']);
	}
?>

<form action="" method="GET" >
    <div>
        <label for="">Введите ваш город:</label>
        <input type="text" name="city">
    </div>
	<div>
        <label for="">Введите ваш возраст:</label>
        <input type="number" name="age">
    </div>
	<input type="submit">
</form>