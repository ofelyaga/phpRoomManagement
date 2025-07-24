<?php
require_once  $_SERVER['DOCUMENT_ROOT'] .'/config.php';
if(isset($_SESSION['user_id'])){
    header("location: ".$_SERVER['DOCUMENT_ROOT'].'/controllers/RoomController.php');
}else{
    header("location: ".$_SERVER['DOCUMENT_ROOT'].'/controllers/AuthController.php');
}
exit;