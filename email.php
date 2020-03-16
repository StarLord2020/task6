<?php 
require_once( "Session.php" );

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sesion = new Session();
    $sesion->save("email",$_POST['email']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">Введите email:</label>
        <input type="email" id="email" name = "email">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>