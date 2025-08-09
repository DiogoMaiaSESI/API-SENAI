<?php
require_once __DIR__ . '/vendor/autoload.php';

use Controller\UserController;
$userController = new UserController();


$method = $_SERVER['REQUEST_METHOD'];


switch ($method) {
    case 'GET':
        $userController->getUsers();
        break;
    case 'POST':
        $userController->createUser();
        break;
    default:
        echo json_encode(['message' => 'Method not allowed']);
        break;
}

if (empty($usuario)){
    echo 'Vazio!';
}
?>