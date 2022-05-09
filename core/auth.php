<?php
session_start();
include_once "../temppl/header.php";
$error = "";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $pas1 = htmlspecialchars($_POST['pas']);
    if (empty($login) || empty($pas1))
        $error = "<br><b>You made a mistake";
    if (empty($error)) {
        $query = "SELECT * FROM `users` WHERE `login` = '$login' and `pass` = MD5('$pas1')";
        $res = DB::query($query);
        if(($item = DB::fetch_array($res)) != false) {
            $_SESSION['auth'] = true;
            $_SESSION['name'] = $item['fio'];
            $_SESSION['user_type'] = $item['user_type'];
        }
        header('location: /');
    }
   include_once "../registration.php";
   include_once "../temppl/registr_form.php";
}