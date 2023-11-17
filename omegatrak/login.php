<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/css/style_login.css">
</head>
<body>
    <div class="header">
        <div class="header_section">
            <div class="headerlogo"><img src="img/omega-logo.svg"></div>
            <div class="headerlog">Вход</div>
        </div>
        <div class="login">
            <form action="php/auth.php" method="post" class="form" id="add-form">
                <div class="input-box">
                    <input type="text" name="login" class="log_input" placeholder="Логин" required>
                </div><!-- required      onsubmit="return false;"-->
                <div class="input-box">
                    <input type="password" name="pass" class="log_input"  placeholder="Пароль" required>
                </div>
            <div class="log_butt">
                <button type="submit" class="log_butt_l log" >Войти</button>
                <button type="button" class="log_butt_o button" onclick="document.location='index.php'">Отменить</button>
            </div>
            </form>
            <!--<script defer src="/js/login.js"></script> -->
        </div>
    </div>
        <div class="navigation">
                <!-- <div class="navigation_item headerButton"><a href="#">Напомнить пароль</a></div> -->
                <div class="navigation_item headerButton"><a href="register.php">Зарегистрироваться</a></div>
        </div>
</body>
</html>