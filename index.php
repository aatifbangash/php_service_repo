<?php session_start();

use App\Controller\UserController;

require __DIR__ . '/vendor/autoload.php';

$app = new UserController();

$response = $app->getAllUsers();
// $response = $app->getUser(1);
// $response = $app->addUser(["id" => 10, "firstName" => "Asif", "lastName" => "aslam", "email" => "asif@gmail.com"]);
// $response = $app->deleteUser(2);
// $response = $app->updateUser(2, ["firstName" => "Asif khan", "lastName" => "aslam", "email" => "asif@gmail.com"]);

echo json_encode($response);