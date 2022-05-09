<?php
    session_start();
    include_once "../temppl/header.php";
    if($_SERVER['REQUEST_METHOD']==='POST') {
        $login = htmlspecialchars($_POST['user_name']);
        $pas1 = htmlspecialchars($_POST['user_pass1']);
        $pas2 = htmlspecialchars($_POST['user_pass2']);
        $fio = htmlspecialchars($_POST['user_fio']);
        $error = "";
        if(!empty($login) && !empty($pas1) && !empty($pas2)){
            $find_login = "SELECT * FROM `users` WHERE login='$login'";
            $result = DB::query($find_login);
            if(($item = DB::fetch_array($result)) != false) {
                $error="This login is already occupied by another user. ";
            }
        }
        if (empty($login))
            $error .= "<b>The login cannot be empty. ";
        if (empty($pas1) || empty($pas2))
            $error .= "<b>The password cannot be empty. ";
        if ($pas1 != $pas2)
            $error .= "<b>Passwords should not differ";
        if (empty($error)) {
            $query = "INSERT INTO `users` (`login`, `fio`, `pass`) VALUES('$login', '$fio', MD5('$pas1'))";
            DB::query($query);
            $_SESSION['auth'] = true;
            $_SESSION['name'] = $fio;
            $_SESSION['user_type'] = 1;

            header('location: /');
        }
        include_once "../temppl/registr_form.php";
        include_once "../registration.php";
    }