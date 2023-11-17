<?php
//$db = mysqli_connect("omegatrak", "root", "", "register");
$mysqli = new mysqli("omegatrak", "root", "", "register");
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    exit();
}
?>