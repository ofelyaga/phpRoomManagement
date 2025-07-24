<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/User.php";

class AuthController
{
    public function login ()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = User::findbyUsername($username);
            //var_dump($user);
           // var_dump(password_verify($password, $user['password']));
            if($user && $user['password'] == $password){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                header('Location: /controllers/RoomController.php');
                exit;
            }else{
                $error = "Wrong username or password";
                include $_SERVER['DOCUMENT_ROOT']."/views/users/login.php";
            }
        }else{
            include $_SERVER['DOCUMENT_ROOT']."/views/users/login.php";
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: /index.php');
        exit;
    }
}
$controller = new AuthController();
$controller->login();