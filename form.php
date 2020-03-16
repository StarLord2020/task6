<?php
require_once( "Session.php" );
$sesion = new Session();
$email = $sesion->select('email');

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
        <div>
            <label for="name">Введите имя:</label>
            <input type="text" id="name" name = "name">
        </div>
        <div>
            <label for="surname">Введите фамилию:</label>
            <input type="text" id="surname" name = "surname">
        </div>
        <div>
            <label for="password">Введите пароль:</label>
            <input type="password" id="password" name = "password">
        </div>
        <div>
            <label for="email">Введите email:</label>
            <input type="email" id="email" name = "email" value="<?php echo $email ?>">
        </div>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>