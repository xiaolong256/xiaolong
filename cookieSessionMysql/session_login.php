<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/22
 * Time: 13:20
 */

if($_POST['submit'] = "submit"){
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($_SESSION['username'] == $username  && $_SESSION['password'] == $password) {
        echo '登录成功';
        header('refresh:2;url=list.php');
    }else{
        echo "用户名或密码不正确";
        header('refresh:2;url=login.html');
    }
}else{
    echo "请先登录";
    header('refresh:2;url=login.html');
}