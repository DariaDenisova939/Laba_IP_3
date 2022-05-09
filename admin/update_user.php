<?php
include_once $_SERVER['DOCUMENT_ROOT']."/core/db.class.php";
DB::getInstance();
$str_pass="";
if(isset($_POST['user_pass1']) && !empty($_POST['user_pass1'])){
    $str_pass=", `pass`= MD5(".$_POST['user_pass1'].")";
}
$str_query_avatar="";
if(isset($_FILES['user_avatar'])){
    $upload_type_file="";
    if($_FILES['user_avatar']['type']='image/jpeg'){
        $upload_type_file=".jpg";
    }
    $upload_name_file=md5(time().$_FILES['user_avatar']['name']);
    $upload_name_directory=$_SERVER['DOCUMENT_ROOT']."/upload/avatars/";
    $upload_avatar = $upload_name_directory.$upload_name_file.$upload_type_file;
    if(move_uploaded_file($_FILES['user_avatar']['tmp_name'], $upload_avatar)){
        echo "файл норм";

    }
    else{
        echo "нас атакуют";
    }
    $str_query_avatar = ", `avatar_name` = '"."/upload/avatars/".$upload_name_file.$upload_type_file."'";
}
$query = "UPDATE `users` SET `login` = '".$_POST['user_name']."', `fio`= '".$_POST['user_fio']."'".$str_query_avatar." WHERE id=".$_POST['id'];
$res = DB::query($query);
header("location: /admin/listusers.php");

