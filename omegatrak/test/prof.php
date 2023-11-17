<div class="forma_bronir">
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

