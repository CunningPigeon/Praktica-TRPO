<?php
session_start();

$mysqli = new mysqli("omegatrak", "root", "", "register");
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    exit();
}
$surname = trim($_POST['surname']);
$name = trim($_POST['name']);
$patron = trim($_POST['patron']);
$land = trim($_POST['land']);
$tel = trim($_POST['tel']);
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$P_pas = trim($_POST['P_pas']);
/*$patt = '~' .
        '/^(?:[1-9])\d{11}$|/' . //^(?:\+[1-9])\d{11}$|
        '/^(?:\+[1-9])\d{11}$|/' .
    '~';
$ps = '/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{7,30}/';
$str = "/^([А-Я]{1}[а-яё]{1,49}|[A-Z]{1}[a-z]{5,49})$/";
$stri = "/^([А-Я]{1}[а-яё]{1,49}|[A-Z]{1}[a-z]{1,49})$/";
if (preg_match($str, $surname)) {} 
else{
    echo "Найдены недопустимые символы или недопустимая длина в поле \"Фамилия\". Возможные символы для использования (нужны: А-Я, A-Z, а-я, a-z), длина (от 6 до 50 символов)";
    exit();
}
if (preg_match($stri, $name)) {} 
else{
    echo "Найдены недопустимые символы или недопустимая длина в поле \"Имя\". Возможные символы для использования (нужны: А-Я, A-Z, а-я, a-z), длина (от 2 до 50 символов)";
    exit();
}
if (preg_match($str, $patron)) {}
else{
    echo "Найдены недопустимые символы или недопустимая длина в поле \"Отчество\". Возможные символы для использования (нужны: А-Я, A-Z, а-я, a-z), длина (от 6 до 50 символов)";
    exit();
}
if (preg_match($str, $land)) {}
else{
    echo "Найдены недопустимые символы или недопустимая длина в поле \"Страна\". Возможные символы для использования (нужны: А-Я, A-Z, а-я, a-z), длина (от 6 до 50 символов)";
    exit();
}
if (preg_match("$^(?:[1-9])\d{11}$|", $tel)) {}
else{
    echo "Найдены недопустимые символы или недопустимая длина телефона. (Пример: 84951234567, 12 символов))";
    exit();
}
if (preg_match($str, $login)) {}
else{
    echo "Найдены недопустимые символы или недопустимая длина в поле \"Логин\". Возможные символы для использования (нужны: А-Я, A-Z, а-я, a-z), длина (от 6 до 50 символов)";
    exit();
}
if (preg_match($ps, $pass) || preg_match($ps, $P_pass)) {}
else{
    echo "Найдены недопустимые символы или недопустимая длина пароля. Возможные символы для использования (нужны: a-z, A-Z, 0-9), длина (от 7 до 30 символов)";
    exit();
}*/
print_r(mb_strlen($surname));
if (mb_strlen($surname) < 5 || mb_strlen($surname) > 50){
    echo "Недопустимая длина фамилии (от 5 до 50 символов)";
    exit();
} else if (mb_strlen($name) < 2 || mb_strlen($name) > 50){
    echo "Недопустимая длина имени (от 2 до 50 символов)";
    exit();
} else if (mb_strlen($patron) > 50){
    echo "Недопустимая длина отчества (от 5 до 50 символов)";
    exit();
} else if (mb_strlen($land) < 5 || mb_strlen($land) > 50){
    echo "Недопустимая длина страны (от 5 до 50 символов)";
    exit();
} else if (mb_strlen($tel) < 11 || mb_strlen($tel) > 14){
    echo "Недопустимая длина телефона (от 11 до 14 символов)";
    exit();
} else if (mb_strlen($login) < 5 || mb_strlen($login) > 50){
    echo "Недопустимая длина логина (от 5 до 50 символов)";
    exit();
} else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 50){
    echo "Недопустимая длина пароля (от 5 до 50 символов)";
    exit();
}

if ($pass != $P_pas){
    echo("Пароли не совпадают");
}
$md5_pass = md5($pass);
//$pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';

$query = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`='{$login}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['users'] = ['login' => $login];
    mysqli_query($mysqli, "INSERT INTO `users` (`surname`, `name`, `patron`, `land`, `tel`, `login`, `pass`) VALUES('{$surname}', '{$name}', '{$patron}', '{$land}', '{$tel}', '{$login}', '{$md5_pass}')");
    header("Location: /index.php");
    exit();
} else {
    echo("Ошибка: Данный логин занят другим пользователем");
    exit();
}
/*/Выйти с авторизации легко. Делаешь кнопку где-либо, типо "Выйти". 
Нажимая на кнопку, тебя перенаправляет на файл, например "logout.php". 
В этом файле пишешь: "unset($_SESSION['user']);", а также переадрисовываешь, например, на главную страницу.
/*/
//
$mysqli->close();
?>
