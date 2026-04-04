<?php
$REQUEST=$_SERVER['REQUEST_URI'];

switch($REQUEST)
{
  case "/":
     include $_SERVER['DOCUMENT_ROOT']."/views/user/login.php";
     break; 

   case "/pages/home":
     include $_SERVER['DOCUMENT_ROOT']."/views/user/home.php";
     break;
}