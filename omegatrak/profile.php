<?php 
include "php/db_connect.php";
session_start(); 
$login = $_SESSION['users']['login'];
$query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`= '{$login}'");
$row = mysqli_fetch_assoc($query);

//print_r($row);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ОмегаТрак</title>
    <link rel="stylesheet" href="/css/style_profile.css">
</head>
<body>
    <?php 
    include "header.php";

    ?>
    <div class="container">
        <div class="container_t">
            <div class="m1">
				<form method="POST">
					<div class="heading"><label>Учетная запись</label></div>
					<div class="link_set"><a class="a1" href="profile.php">Ваш профиль</a></div>
					<div class="link_set"><a class="a1" href="booking.php">Бронирование</a></div>

					<div class="heading"><label>Настройки</label></div>
					<div class="link_set"><a class="a1" href="php/logout.php">Выход</a></div>
				</form>
            </div>
			

            <div class="m2">
				<div>
					<div class="row">
						<div class="row lef"><label>Фамилия</label></div>
						<div class="row rig"><labeд><?php echo ($row['surname']);?></label></div>
					</div>
					<div class="row">
						<div class="row lef"><label>Имя</label></div>
						<div class="row rig"><label><?php echo ($row['name']);?></label></div>
					</div>
					<div class="row">
						<div class="row lef"><label>Отчество</label></div>
						<div class="row rig"><label><?php echo ($row['patron']);?></label></div>
					</div>
					<div class="row">
						<div class="row lef"><label>Логин</label></div>
						<div class="row rig"><label><?php echo ($_SESSION['users']['login']);?></label></div>
					</div>
					<div class="row">
						<div class="row lef"><label>Страна</label></div>
						<div class="row rig"><label><?php echo ($row['land']);?></label></div>
					</div>
					<div class="row">
						<div class="row lef"><label>Телефон</label></div>
						<div class="row rig"><label><?php echo ("+" .$row['tel']);?></label></div>
					</div>
				</div>
			</div>
				
        </div>
    </div>
    
</body>
</html>