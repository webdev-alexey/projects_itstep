<?php
session_start();
include "function.php";
ob_start();
include "includes/db.php";

if(isset($_POST['login'])){
    //Значения от пользователя
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_login = "SELECT * FROM users WHERE username = '$username'";
    $login_query = mysqli_query($connection, $sql_login);
    confirmQuery($login_query);
    foreach ($login_query as $item) {
        //Значения из БД
        $db_username = $item['username'];
        $db_password = $item['user_password'];
    }
    if($username != $db_username && $password != $db_password){
        //$_SESSION['msg'] = 'Неверный логин';
        header("Location: /index.php", TRUE);
    }else if($username == $db_username && $password == $db_password){
        $_SESSION['username'] = $username;
        header("Location: /admin/index.php", TRUE, 301);
    }
    ob_end_flush();
}
    
?>