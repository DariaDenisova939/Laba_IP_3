<?php
session_start();
unset($_SESSION['auth']);
unset($_SESSION['name']);
unset($_SESSION['user_type']);
header('location: /');