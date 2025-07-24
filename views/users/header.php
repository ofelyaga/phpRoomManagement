<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель</title>
</head>
<body>
<nav class = 'navbar'>
    <span>Admin panel</span>
    <div>
        Привет <?=$_SESSION['username']??" "?>
        <a href="<?=$_SERVER['DOCUMENT_ROOT'].'/controllers/AuthController.php?logout=1';?> ?? ' ' "></a>
    </div>
</nav>
<ul>
    <li><a href="<?=$_SERVER['DOCUMENT_ROOT'].'/controllers/RoomController.php';?>"></a>Главная</li>
    <li><a href="<?=$_SERVER['DOCUMENT_ROOT'].'/controllers/RoomController.php?action=addRoom';?>"></a>Добавить номер</li>
    <?php
    //var_dump($_SESSION);
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'):?>
    <li><a href="<?=$_SERVER['DOCUMENT_ROOT'].'/controllers/UserController.php';?>"</a>Пользователи</li>
    <?php endif; ?>

</ul>

