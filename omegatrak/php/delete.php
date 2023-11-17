<?php
session_start();

$mysqli = new mysqli("omegatrak", "root", "", "register");
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    exit();
}

$login = $_SESSION['users']['login'];
$query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`= '{$login}'");
$row = mysqli_fetch_assoc($query);
$id_users = $row['id'];
$query = '';

$id = $_POST['id'];

//Отправляем запрос БД booking с условием `id_users`= '$id_users' AND `id` = '$id'
$query = mysqli_query($mysqli, "SELECT * FROM `booking` WHERE `id_users`= '$id_users' AND `id` = '$id'");

if (mysqli_num_rows($query) > 0) {
    mysqli_query($mysqli, "DELETE FROM `booking` WHERE `booking`.`id` = '{$id}'");
    header("Location: /booking.php");
    exit();
} else{
    echo "Error";
    //print_r($id);
}

?>