<?php
include 'header.php';
include $_SERVER['DOCUMENT_ROOT'].'/controllers/Roomcontroller.php';
$room = new Roomcontroller();
?>
<h2>Добавить номер</h2>
<form method="post" action="<?=$room->addRoom()?>">
    <label>
        Номер: <input type="text" name="number" required>
    </label>
    <label>
        Цена: <input type="number" step="0.01" name="price" required>
    </label>
    <label>
        Тип: <input type="text" name="type" required>
    </label>
    <button type="submit">Сохранить</button>
</form>
