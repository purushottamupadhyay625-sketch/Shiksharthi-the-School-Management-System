<?php
require __DIR__ . "/vendor/autoload.php";

use Purushottam\SchoolManagementSystemUi\App\Controllers\AuthenticationController;

$REQUEST = $_SERVER['REQUEST_URI'];

switch ($REQUEST) {
  case "/":
    include $_SERVER['DOCUMENT_ROOT'] . "/views/user/login.php";
    break;
  case "/user/authenticate":
    $authenticationController = new AuthenticationController();
    $authenticationController->authenticate();
    break;
  case "/dashboard":
    include $_SERVER['DOCUMENT_ROOT'] . "/views/user/dashboard.php";
    break;
}
