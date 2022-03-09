<?php
session_start();

use App\User;

if (isset($_POST)) {
    $user = new User();
    $action = $_POST['action'];
    switch ($action) {

        case 'signin':
            $result = $user->signin($_POST['email'], $_POST['password']);
            $_SESSION['user'] = $result;
            echo $result;
            break;
        case 'validateEmail':
            $result = $user->validateEmail($_POST['email']);
            echo $result;
            break;
        case 'addUser':
            echo $user->addUser($_POST['name'], $_POST['email'], $_POST['password'], 'user');
            break;
    }
}
