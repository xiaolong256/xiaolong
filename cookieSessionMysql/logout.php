<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/25
 * Time: 8:57
 */

//session_start();
//session_unset($_SESSION['username']);
//session_unset($_SESSION['password']);

setcookie('username',time()-3600);
setcookie('password',time()-3600);

echo '退出登录成功，2秒后跳转到<a href="login.html">登录页面</a>';
header('refresh:2;url=login.html');

