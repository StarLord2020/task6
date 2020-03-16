<?php
	require_once( "Session.php" );
	if (!empty($_REQUEST['country'])) {

		$sesion = new Session();
		$sesion -> save('country',$_REQUEST['country']);
	}
?>

<form action="" method="GET" >
	<label for="">Введите вашу страну:</label>
	<input type="text" name="country">
	<input type="submit">
</form>