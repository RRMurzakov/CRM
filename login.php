<?php
// Подключаем коннект к БД
require_once 'db.php';

	echo '<br /> 
	<form method="post">
	ЛОГИН: <input type="text" name="username_input" /> <br /> 
ПАРОЛЬ: <input type="text" name="password_input" /> <br />
<input type="submit" name="submit" value="Login" />
</form>';


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
