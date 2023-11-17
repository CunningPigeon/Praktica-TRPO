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
                    <a  class="a1"  href="/login.php">Войти</a>
                <?php else: ?>
                    <a  class="a1"  href="/profile.php">
                        <?php 
                        if ($_SESSION['users']){
                            echo ($_SESSION['users']['login']);
                        }
                        ?> 
                    </a>
                <?php endif ?>

                <?php if ($_SESSION['users']  == ''): ?>
                    <a  class="a1"  href="/register.php">Регистрация</a>
                <?php else: ?>
                    <a  class="a1"  href="php/logout.php">Выйти</a>
                <?php endif ?>
            </div>        
        </div>
        <div class="header_section">
            <div class="header_item headerButton"><a class="a1" href="index.php">О нас</a></div>
            <div class="header_item headerButton"><a class="a1" href="https://www.etsp.by/Documents/PDF/prezentaciya-omega-2023-rus.pdf">Презентация компании</a></div>
        </div>
    </div>  
<?php
$mysqli->close(); 
?>

    <div class="container">
        <div>
            <div class="text">
                
                <p>Сегодня мы являемся одним из ведущих российских дистрибьюторов мировых лидеров по производству запасных частей к европейским грузовым автомобилям MERCEDES, MAN, SCANIA, VOLVO, DAF, IVECO, RENAULT на полуприцепы с осями BPW, SAF, SMB, ROR.
                Приобретайте запчасти для европейских грузовиков и полуприцепов оптом и в розницу в «ОМЕГА ТРАК» с доставкой во все регионы Беларуси.</p>
                <img class="img" src="img/img 1.jpg">
                <p>Мы развиваем партнерские отношения со всемирно известными производителями для оригинального оснащения, в общей сложности, мы работаем с продукцией более чем 150 брендов:</p>
            DT, Bosch, Sachs, Lemforder, ZF, Wabco, ProVia, Euroricambi, Sampa, Meritor, Trucktechnic, Donaldson, Fras-le, Lonaflex, Weweler, KS, BF, TRW, Pierburg, Varta, Gigawatt, BPW, Ermax, Knorr, FeBi, Rostar, FAG, LUK, INA, Techno Brake, Emmerre, SAFHOLLAND, Hengst, Firestone, Airogear, DAF, TRP, Monroe, Nissens, Schmitz, Volvo, MAN, Mahle, JOST, Rockinger, SKF, Beral, Nural, Glyco, Goetze, Moog, AE, Payen, Beru, Federal Mogul, UC, Elring, Behr, Hella, Alon, Renault (RVI), Haldex, Mercedes Benz, SLP, Infinity, Prista, Mobil, Phoenix, Contitech, PE, Dinex, TTT, LEMA, WWI, Forsage, FORCEKRAFT, Iveco, Auger, Webasto, Dayco, Valeo, M-Filter, Depo, Textar, WISTRA, Ege Fren, Bipro, Kongsberg, Was, Scania, Motorherz, Pemco, Covind, OE-Germany, Vignal, KKK, Schwitzer, Wahler, BorgWarner, Eberspacher, Reinz, Corteco, Mansons, Gates, NRF, LIQUI MOLY, Holset, CEI, Alko, Shell, Monark, Filtron, БелАвтоКомплект, Castrol, Hestal, MEI, Durbloc, FTE, Sirit, Remy, BORG HICO, Cospel, John-Guest, Racor, TOTAL, Wurth, KS tools, ЧМЗ, Garrett, SMB, Yumak, SEFERIADIS, Kassbohrer, Texaco, Parlok, Koni, Springride, Goodyear, Siegel, AE&T, JTC.<p>
                <p>Весь представленный ассортимент можно купить оптом и в розницу на нашем сайте и в сети магазинов «ОМЕГА ТРАК». Для удобного и быстрого поиска нужной запчасти на нашем сайте представлен сервис подбора:</p>
                <ul>
                    <li>По VIN коду</li>
                    <li>По КПП</li>
                    <li>По редуктору</li>
                    <li>По двигателю</li>
                </ul>
                <strong>Почему выгодно быть нашим клиентом?</strong>
                <p>На сегодняшний день компания «ОМЕГА ТРАК» предлагает своим клиентам:</p>
                <ul>
                    <li>удобный онлайн-склад с самым широким ассортиментом запчастей всех ценовых категорий: от европейского премиум-класса до заменителей турецкого и китайского производства эконом-класса;</li>
                    <li>постоянное наличие на нашем распределительном складе в г. Минск и на филиалах более 25 000 наиболее востребованных покупателями наименований;</li>
                    <li>быструю доставку запчастей под заказ из Европы и хорошо налаженную систему поставок во все регионы Республики Беларусь;</li>
                    <li>индивидуальный подход к каждому покупателю с возможностью подбора запасных частей с учетом ассортимента магазина.</li>
                </ul>
                
                <p>Благодаря расширенной филиальной сети, мы доставляем продукцию по всей территории Республики Беларусь в кратчайшие сроки. Вы можете забрать заказанный товар со склада в удобном для вас магазине нашей сети. Филиалы «ОМЕГА ТРАК» в Республике Беларусь представлены в городах: Минск, Борисов, Брест, Витебск, Гомель, Гродно, Могилев, Барановичи, Лида, Полоцк.</p>
                <img class="img" src="img/img 2.gif">
                <p>Лояльность наших клиентов превыше всего, поэтому мы заинтересованы в оценке качества обслуживания и предоставляемых услуг по доставке. Если у вас возникли вопросы, замечания или предложения, напишите нам на электронную почту <a href="Email:info@etsp.ru">info@etsp.ru</a> и мы обязательно учтем ваше мнение!</p>
                
                <strong>Почему выгодно быть нашим партнером?</strong>
                <p>Заводы-изготовители находят в лице компании «ОМЕГА ТРАК» надежного партнера для продвижения своего товарного ассортимента на белорусский рынок, ведь для этого мы располагаем всеми необходимыми средствами:</p>
                <ul>
                    <li>развитые каналы реализации: с распределительного склада компании продукция отгружается в наши филиалы;</li>
                    <li>мы реализуем запчасти через собственную сеть магазинов в Минске и других городах Республики Беларусь;</li>
                    <li>налаженная цепочка импорта, бесперебойное функционирование которой обеспечивают проверенные транспортные компании, таможенные брокеры и органы по сертификации запчастей;</li>
                    <li>собственная информационная система с интегрированным в нее онлайн-складом и накопленной за годы работы подробнейшей статистикой спроса, которая постоянно обновляется благодаря постоянным онлайн-клиентам;</li>
                    <li>отдел закупок, формирующий оптимальные заказы, а также отдел оптовых продаж, ведущий активные продажи продвигаемых торговых марок.</li>
                </ul>
                <p>Мы ценим наших партнеров и покупателей, поэтому готовы предложить самые выгодные условия сотрудничества. Надежность, открытость и честность – главные принципы работы нашей компании.</p>
                <p>Покупая запасные части в «ОМЕГА ТРАК», вы приобретаете гарантированное качество европейского стандарта по доступным ценам.</p>
            </div>
        </div>
    </div> 


    <div class="footer">
        <div class="container_foot">
            <div class="col">
                <p class="p_foot">Юридический адрес: Республика Беларусь, г. Минск, ул. Бабушкина, д. 8, пом. 24</p>
                <p class="p_foot">Дата регистрации в Торговом реестре РБ: 22.12.2017г.</p>
                <p class="p_foot">УНП: 191310082</p>
            </div>
            <div class="col">
                <p class="p_foot">Email:</p>
                <a class="p_foot" href="Email:all_sales_rb@etsp.ru">all_sales_rb@etsp.ru</a>
                <p class="p_foot">Телефоны для связи:</p>
                <a class="p_foot" href="tel:+375173110019">+375 (17) 311-00-19</a>
            </div>
            <div class="col">
                <p class="p_foot">Режим работы интернет-магазина:</p>
                <p class="p_foot">понедельник-пятница: с 09-00 до 19-00</p>
                <p class="p_foot">суббота: с 09-00 до 17-00</p>
                <p class="p_foot">воскресенье: с 09-00 до 15-00</p>
            </div>
            <div class="col">
                <p class="p_foot">Условия доставки:</p>
                <p class="p_foot">Доставка осуществляется бесплатно, после предварительной оплаты или заказа товара при его наличии, в режиме работы интернет-магазина</p>
            </div>
        </div>
    </div>
    <div class="foot2">
        &copy;  2005-2023 "Омега"|
    </div>
    
</body>
</html>