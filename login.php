<?php
// Подключаем коннект к БД
require_once 'db.php';

	/*echo '<br /> 
	<form method="post">
	ЛОГИН: <input type="text" name="username_input" /> <br /> 
ПАРОЛЬ: <input type="text" name="password_input" /> <br />
<input type="submit" name="submit" value="Login" />
</form>';*/


$username_input = $_POST['username_input'];
$password_input = $_POST['password_input'];
if ($result = mysqli_query($db, "SELECT `username` FROM `users` WHERE `username`='" . $username_input . "' and `password`='" . $password_input . "'")) {
        if( mysqli_num_rows($result) == 1) { 
                echo "Аккаунт подтверждён";
            } else {
                echo "Что то пошло не так";
            }
        } 
?>

<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

  <form method="post" action="" class="login">
    <p>
      <label for="login">Логин:</label>
      <input type="text" name="username_input" id="login" >
    </p>

    <p>
      <label for="password">Пароль:</label>
      <input type="password" name="password_input" id="password" >
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Войти</button>
    </p>
  </form>
</body>
</html>