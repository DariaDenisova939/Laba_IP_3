<?php
    define( 'PATH' , $_SERVER['DOCUMENT_ROOT']);
    include_once PATH . "/core/db.class.php";
    DB::getInstance();
    session_start();

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" href="/styles/style.css">
    <script type="text/javascript" src="/scripts/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="/scripts/scripts_lab_3.js"></script>
</head>
<div class="main_content">
    <div class="block_page_one">
        <div align="center" class="menu">
            <ul>
                <body link="red" vlink="#cecece" alink="#ff0000" bgcolor="black">
                    <li><button class="menu_button" onclick="window.location.href = '/index.php';">Home page</button></li>
                    <li><button class="menu_button" onclick="window.location.href = '/gallery.php';">Gallery</button></li>
                </body>
                <?php
                    if(isset($_SESSION['auth'])){
                        echo "User: " . $_SESSION['name'];?>
                        <li><button class="menu_exit" id='url_list3' onclick="window.location.href = '/exit.php';">Exit</button><br></li>
                        <?php
                        if($_SESSION['user_type'] == 5){
                            require_once PATH."/admin/admin_menu.php";
                        }
                    }
                    else
                    {?>
                        <li><button class="menu_button" onclick="window.location.href = '/registration.php';">Register</button></li>
                <? } ?>

            </ul>
            <?php
                if(!isset($_SESSION['auth'])){ ?>
                    <div class="block_input">
                        <form action="/core/auth.php" method="POST">
                            <label for="login">Login</label>
                            <input id="input_pas_log" name="login"><br>

                            <label for="pass">Password</label>
                            <input id="input_pas_log" type="password" name="pas"><br>

                            <input id="enter" type="submit" value="Sign in">

                        </form>
                    </div>
          <?php } ?>
        </div>
    </div>
