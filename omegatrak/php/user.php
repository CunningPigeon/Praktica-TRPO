<?php
session_start();
$mysqli = new mysqli("omegatrak", "root", "", "register");
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    exit();
}
$login = $_POST['login'];
$pass = $_POST['pass'];

$query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`='{$login}' AND `pass` = '{$md5_pass}'");
if (mysqli_num_rows($query) == 1){
    $_SESSION['users'] = ['login' => $login];
    header("Location: /index.php");
}

?>