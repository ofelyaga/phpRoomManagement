<?php
include 'header.php';
require_once $_SERVER['DOCUMENT_ROOT']."/models/Room.php";
$rooms = Room::getAllrooms();
?>
    <a href="add.php">Добавить номер</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Номер</th>
        <th>Тип</th>
        <th>Цена</th>
        <th>Статус</th>
    </tr>
    <?php foreach ($rooms as $room):?>
    <tr>
        <td><?=$room['id']?></td>
        <td><?=$room['number']?></td>
        <td><?=$room['type']?></td>
        <td><?=$room['price']?></td>
        <td><?=$room['status']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'?>
