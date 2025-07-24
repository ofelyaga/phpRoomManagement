<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/Room.php";

class RoomController
{
    public function index()
    {
        $this->checkAuth();
        $rooms = Room::getAllrooms();
        include $_SERVER['DOCUMENT_ROOT'] . "/views/rooms/index.php";

    }
    public function addRoom()
    {
        $this->checkAuth();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = $_POST['number'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            Room::createRoom($number, $type, $price);
            header("Location: /controllers/RoomController.php");
            exit;
        }
        include $_SERVER['DOCUMENT_ROOT'] . "/views/rooms/add.php";
    }

    public function checkAuth()
    {
        if(!isset($_SESSION['user_id'])) {
            header("Location:  /controllers/AuthController.php");
            exit;
        }
    }
}
$action= $_GET['action']??'index';
$controller = new RoomController();
$controller->$action();