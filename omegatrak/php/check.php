<?php
   // $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
    /*/$patron = filter_var(trim($_POST['patron']), FILTER_SANITIZE_STRING);
    $land = filter_var(trim($_POST['land']), FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);/*/
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);
    //$P_pas
    
    /*/if(mb_strlen($surname) < 3 || mb_strlen($surname) > 40){
        echo "Недопустимая длина фамилии";
        exit();
    } else if(mb_strlen($name) < 4 || mb_strlen($name) > 40){
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($tel) < 7 || mb_strlen($login) > 12){
        echo "Недопустимая длина телефона";
        exit();
    } else/*/ if(strlen($login) < 5 || strlen($login) > 40){
        echo "Недопустимая длина логина";
        exit();
    } else if(strlen($pass) < 5 || strlen($pass) > 7){
        echo "Недопустимая длина пароля (от 5 до 7 символов)";
        exit();
    }

    $mysql = new mysqli('omegatrak', 'root', '', 'bd-register');
    $mysql->query("INSER INTO `user` (`name`, `login`, `pass`) VALUES('$name', '$login', '$pass')");
//'$surname', '$name', '$patron', '$land', $tel, '$login', '$pass' `surname`, `name`, `patron`, `land`, `tel`, `login`, `pass`
    $mysql->close();

    header('Location: /')
?>