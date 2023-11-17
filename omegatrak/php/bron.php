<?php
session_start();

$mysqli = new mysqli("omegatrak", "root", "", "register");
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    exit();
}
$number = $_POST['number'];
$auto = $_POST['auto'];
$cat = $_POST['cat'];
$date = $_POST['date'];
$time = $_POST['time'];

if (($cat != 1) && ($time == 0 || $time == null)){
    header("Location: /booking.php");
    exit();
} 
if ($cat == 1){
    $time = 0;
}

$login = $_SESSION['users']['login'];
$query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login` = '{$login}'");
$row = mysqli_fetch_assoc($query);
$id_users = $row['id'];
$query = '';

$query = mysqli_query($mysqli, "SELECT * FROM `booking` WHERE `number` = '{$number}'");
if (mysqli_num_rows($query) == 0) {
    mysqli_query($mysqli, "INSERT INTO `booking` (`id_users`, `number`, `auto`, `cat`, `time`, `date`) VALUES('{$id_users}', '{$number}', '{$auto}', '{$cat}','{$time}', '{$date}')");
    header("Location: /booking.php");
    exit();
} else {
    echo "error";
    header("Location: /booking.php");
}

?>