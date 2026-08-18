<?php
require_once __DIR__ . '/../Models/UserModel.php';

class Auth {
    private $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login($username,$password){
        $user = $this->userModel->getByUsername($username);
        return $username;
    }
}
?>