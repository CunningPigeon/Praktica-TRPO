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
				<div class="forma_bronir">
					<form action="php/bron.php" method="post">
						<div class="container_b">
							<div class="forma">
								<div class="row">
									<label for="number" class="lab">Номер автомобиля</label>
									<input type="text" class="bron" name="number" placeholder="2005 NT-7">
								</div>	
								<div class="row">
									<label for="auto" class="lab">Автомобиль</label>
									<input type="text" class="bron" name="auto" placeholder="Volvo">
								</div>
								<div class="row">
									<label for="cat" class="lab">Категория</label>
									<input type="text" class="bron" name="cat" placeholder="1"> 
								</div>
								<!---<div class="row">
									<label for="num_p" class="lab">Номер места</label>
									<input type="text" class="bron" id="num_p" name="num_p">
								</div> --->
								<div class="row">
									<label for="num_p" class="lab">Дата</label>
									<input type="text" class="bron" name="date" placeholder="12.03.20023">
								</div>
								<div class="row">
									<label for="num_p" class="lab">Кол-во суток</label>
									<input type="text" class="bron" id="time" name="time" placeholder="0">
								</div>
								<div class="row_br">
									<button type="submit" class="button">Оформить</button> 
								</div>
							</div>

							<div class="info">
								<p>Категория:<br>-1 (до 6 часов 5 руб)<br>-2 (грузовой 10 руб/сутки)<br>-3 (легковой 7 руб/сутки)<br></p>
								<p>Примечание:<br>
								Поле "Дата" отвечает с какого дня начинается бронь.<br>
								Формат: ДД.ММ.ГГГГ</p>
							</div>
						</div>
					</form>
				</div>
			
				<div class="function">
					<form action="php/delete.php" method="POST">
						<button type="submit"class="button"> Удалить</button>
						<input type="text" class="fun_log" name="id" placeholder="№">
					</form>
					<!--<form action="">
						<button type="submit"class="button"> Изменить</button>
						<input type="text" class="fun_log" name="id">
					</form> --->
				</div>

				<div class="tabl">
                	<table class="table">
						<thead>
							
							<tr>
								<th>№</th>
							<?php 
								//print_r($row);
								if($row['access'] == 1){
							?>
								<th>ФИО</th>
							<?php
							} 
							?>
								<th>Номер автомобиля</th>
								<th>Автомобиль</th>
								<th>Дата</th>
								<th>Кол-во суток</th>
								<th>Категория</th>
								<th>Цена</th>
								<th>Тариф</th>
								<th>Итого </th>
							</tr>
						</thead>
						<tbody>
							<?php 
								include "php/db_connect.php";

								
								// $query_u = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`='{$login}'"); 
								$query_u = mysqli_query($mysqli, "SELECT * FROM `users`"); 
								//$row = mysqli_fetch_assoc($query_u); 
								
								//получаем данные БД category users
								$users = mysqli_fetch_all($query_u);
								//$id_users = $row['id'];
								//print_r($row['id']);
								
								
								$category = mysqli_query($mysqli, "SELECT * FROM `category`");
								//получаем данные БД category
								$category = mysqli_fetch_all($category);
								//print_r($category);

								// $query = mysqli_query($mysqli, "SELECT * FROM `booking` WHERE `id_users`='{$id_users}'"); 
								
								$query = mysqli_query($mysqli, "SELECT * FROM `booking`"); 
								//получаем данные БД booking
								$query = mysqli_fetch_all($query);
								//$query_u = mysqli_fetch_all($query_u);
								//print_r($query_u);
								
								if ($row['access'] == 1){
									
									foreach ($query as $quer){
										 
							?>
								<tr>
									<td><?= $quer[0] /*Номер*/?></td>
									<td><?foreach ($users as $user){ 
										if ($quer[1] == $user[0])
										echo $user[1], ' ',$user[2], ' ',$user[3];} /*ФИО*/ ?></td>
									<td><?= $quer[2] /*Номер автомобиля*/?></td>
									<td><?= $quer[3] /*Автомобиль*/?></td>
									
									<td><?= $quer[7] /*Дата*/?></td>
									<td><?= $quer[6] /*Кол-во суток*/?></td>
							<?php 
								foreach ($category as $cat){
							?>
								<? if ($cat[0] == $quer[4]){ 
									echo "<td>" . $cat[1] . "</td>";
									echo "<td>" . $cat[2] . "</td>";
									echo "<td>" . $cat[3] . "</td>";
									if ($cat[0] == 1){
										echo "<td>" . $cat[2] * 1 . " руб.</td>";
									} else{
										echo "<td>" . $cat[2] * $quer[6] . " руб.</td>";
									}
								} /*Категория Цена Тариф Итого*/?>								
							<?php 
							}}
							}else {		
								$query_u = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`='{$login}'");
								$row = mysqli_fetch_assoc($query_u); 
								$id_users = $row['id'];

								$query = mysqli_query($mysqli, "SELECT * FROM `booking` WHERE `id_users`='{$id_users}'");
								$query = mysqli_fetch_all($query);
								foreach ($query as $quer){	
							?>
								<tr>
									<td><?= $quer[0] /*Номер*/?></td>
									<td><?= $quer[2] /*Номер автомобиля*/?></td>
									<td><?= $quer[3] /*Автомобиль*/?></td>
									<td><?= $quer[7] /*Дата*/?></td>
									<td><?= $quer[6] /*Кол-во суток*/?></td>
							<?php 
								foreach ($category as $cat){
							?>
								<? if ($cat[0] == $quer[4]){ 
									echo "<td>" . $cat[1] . "</td>";
									echo "<td>" . $cat[2] . "</td>";
									echo "<td>" . $cat[3] . "</td>";
									if ($cat[0] == 1){
										echo "<td>" . $cat[2] * 1 . " руб.</td>";
									} else{
										echo "<td>" . $cat[2] * $quer[6] . " руб.</td>";
									}
								} /*Категория Цена Тариф Итого*/?>								
							<?php 
							}}}
							?>	
								</tr>
						</tbody>
					</table>
                </div>
			</div>
				
        </div>
    </div>
    
</body>
</html>


