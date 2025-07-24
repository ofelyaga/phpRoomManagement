<?php include 'header.php';
if (isset($error)): ?>
<p><?=$error?></p>
<?php endif;?>

<h2>Вход в административную панель</h2>
<form method="post" action="<?=$_SERVER['DOCUMENT_ROOT'].'/controllers/AuthController.php';?>">
    <input type="text" name = 'username' placeholder="login" required>
    <input type="password" name = 'password' placeholder="password" required>
    <button type="submit">Войти</button>
</form>

<?php
include 'footer.php';
?>