<?php
require_once $_SERVER['DOCUMENT_ROOT']."/config.php";
//
class Room {
    public static function getAllrooms() {
        global $pdo;
       $stmt = $pdo->prepare("SELECT * FROM rooms");
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function createRoom($number, $type, $price)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO rooms (number, type, price) VALUES (?, ?, ?)");
        $stmt->execute([$number, $type, $price]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}