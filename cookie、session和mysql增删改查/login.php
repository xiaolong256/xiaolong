<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/22
 * Time: 13:20
 */
require_once './autoload.php';

if($_POST['submit'] = "submit"){
    session_start();
    if($_COOKIE['username'] == $_SESSION['username'] &&$_COOKIE['password'] == $_SESSION['password']) {
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