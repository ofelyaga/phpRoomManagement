<?php
class UserController{
    public function index()
    {
        $this->checkAuth();
        if(isset($_SESSION['user_id']) && $_SESSION['role'] !== 'admin'){
            http_response_code(403);
            echo '403 Forbidden';
            exit;
        }
        $users = User::findUsers();
        include $_SERVER['DOCUMENT_ROOT']."/views/users/index.php";
    }
    public function checkAuth()
    {
        if(!isset($_SESSION['user_id'])) {
            header("Location: AuthController.php");
            exit;
        }
    }
}
$controller = new UserController();
$controller->index();