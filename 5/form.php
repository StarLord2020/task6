<?php
require_once( "../Session.php" );
$sesion = new Session();
$age = $sesion->select('age');
$city = $sesion->select('city');

?>

<form action="" method="GET" >
    <div>
        <label for="">Введите ваш имя:</label>
        <input type="text" name="city">
    </div>
    <div>
        <label for="">Введите ваш возраст:</label>
        <input type="number" name="age" value="<?=$age?>">
    </div>
    <div>
        <label for="">Введите ваш город:</label>
        <input type="text" name="city" value = "<?=$city?>">
    </div>
    <input type="submit">
</form>