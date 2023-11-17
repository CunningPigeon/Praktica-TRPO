<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/style_register.css">
</head>
<body>
    <div class="header">
        <div class="headerlogo"><img src="img/omega-logo.svg"></div>
    </div>
    <div class="text">
        <h1 class="h1">Регистрация</h1>
        <p class="p">Зарегистрируйтесь, чтобы увидеть цены и наличие товара на сайте <a href="https:\\www.etsp.by">www.etsp.by</a>!
        <br>Укажите на данной форме свои контактные данные, необходимые для подтверждения или восстановления доступа.
        <br>Выбор вариантов, какую организацию (юридическое лицо) Вы представляете или розничный покупатель (физическое лицо), будет доступен на последующих этапах регистрации.
        </p>
    </div>
    <div class="register">
        <form action="php/reg.php" method="post">
            <div class="row">
                <label for="surname" class="reg_lab">Фамилия*</label>
                <div><input type="text" class="reg_log" id="surname" name="surname"></div>
            </div>
            <div class="row">
                <label for="name" class="reg_lab">Имя*</label>
                <input type="text" class="reg_log" id="name" name="name">
            </div>  
            <div class="row">
                <label for="patron" class="reg_lab">Отчество</label>
                <input type="text" class="reg_log" id="patron" name="patron">
            </div>
            <div class="row">
                <label for="land" class="reg_lab">Страна*</label>
                <input type="text" class="reg_log" id="land" name="land">
            </div>
            <div class="row">
                <label for="tel" class="reg_lab">Мобильный телефон*</label>
                <input type="text" class="reg_log" id="tel" name="tel">
            </div>
            <div class="row">
                <label for="login" class="reg_lab">Логин*</label>
                <input type="text" class="reg_log" id="login"  name="login">
            </div>
            <div class="row">
                <label for="pass" class="reg_lab">Пароль*</label>
                <input type="password" class="reg_log" id="pass"  name="pass">
            </div>
            <div class="row">
                <label for="P_pas" class="reg_lab">Портверждение пароля*</label>
                <input type="password" class="reg_log" id="P_pas" name="P_pas">    
            </div>
            <div class="row">
                <button type="submit" class="reg_butt">Зарегистрироваться</button>
            </div>
        </form>  
    
</body>
</html>