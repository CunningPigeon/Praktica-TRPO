<?php 
include "php/db_connect.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ОмегаТрак</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="header">
        <div class="header_client_section">
            <div class="headerlogo">
                ОМЕГА
            </div>
            <div class="clientData headerButton">   
                <?php 
                    session_start();  
                ?>
                <?php if ($_SESSION['users']  == ''): ?>
                    <a class="a1" href="/login.php">Войти</a>
                <?php else: ?>
                    <a class="a1" href="/profile.php">
                        <?php 
                        if ($_SESSION['users']){
                            echo ($_SESSION['users']['login']);
                        }
                        ?> 
                    </a>
                <?php endif ?>

                <?php if ($_SESSION['users']  == ''): ?>
                    <a class="a1" href="/register.php">Регистрация</a>
                <?php else: ?>
                    <a class="a1" href="php/logout.php">Выйти</a>
                <?php endif ?>
            </div>        
        </div>
        <div class="header_section">
            <div class="header_item headerButton"><a class="a1" href="index.php">О нас</a></div>
            <div class="header_item headerButton"><a class="a1" class="a1" href="https://www.etsp.by/Documents/PDF/prezentaciya-omega-2023-rus.pdf">Презентация компании</a></div>
        </div>
    </div>  
<?php
$mysqli->close(); 
?>
</body>
</html>