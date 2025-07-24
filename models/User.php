<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config.php";
class User
{
    public static function findbyUsername($username)
    {
        global $pdo;
        $smtp = $pdo->prepare("SELECT * FROM `users` WHERE `username` = ?");
        $smtp->execute([$username]);
        return $smtp->fetch(PDO::FETCH_ASSOC);
    }
    public static function findUsers()
    {
        global $pdo;
        $smtp = $pdo->prepare("SELECT * FROM `users`");
        $smtp->execute();
        return $smtp->fetchAll(PDO::FETCH_ASSOC);
    }
}