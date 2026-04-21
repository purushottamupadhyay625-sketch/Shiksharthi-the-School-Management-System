<?php
require __DIR__ . "/vendor/autoload.php";

use Purushottam\SchoolManagementSystemUi\App\Controllers\EnrollmentController;
use Purushottam\SchoolManagementSystemUi\App\Controllers\AuthenticationController;
use Purushottam\SchoolManagementSystemUi\App\Controllers\LeadsController;

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
  case "/leads":
    include $_SERVER['DOCUMENT_ROOT'] . "/views/leads/index.php";
    break;
  case "/leads/new":
    include $_SERVER['DOCUMENT_ROOT'] . "/views/leads/new.php";
    break;
  case "/leads/create":
    $leadsController = new LeadsController();
    $leadsController->create();
    break;
  case "/enrollment":
     include $_SERVER['DOCUMENT_ROOT']."/views/enrollment/index.php";
     break;
   case "/enrollment/new":
     include $_SERVER['DOCUMENT_ROOT']."/views/enrollment/new.php";
     break;
  case "/enrollment/create":
        $enrollmentController = new EnrollmentController();
        $enrollmentController->Create();
        break;
  default:
    echo "Page not found!";
}
