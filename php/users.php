<?php

include 'functions.php';

$users = [
   "Алексей" => ['id' => 1, 'password' => md5('123')],
   "Владимир" => ['id' => 2, 'password' => md5('456')],
];

$userLogin = $_POST["login"] ?? null;
$userPassword = md5($_POST["password"]) ?? null;

if (null != $userLogin || null !== $userPassword) {

   foreach ($users as $login => $password) {
      if ($userLogin === $login && $userPassword === $password["password"]) {
         session_start();

         $_SESSION['auth'] = true;

         $_SESSION['id'] = $password["id"];
         $_SESSION['login'] = $login;
      }
   };
}

$auth = $_SESSION['auth'] ?? null;
$login = $_SESSION['login'] ?? null;

if ($auth) {
   header('Location: ../index.php');
   exit;
} else {
   header('Location: ./login.php');
   exit;
}
