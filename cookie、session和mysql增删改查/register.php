<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/22
 * Time: 13:20
 */
require_once './autoload.php';

session_start();
$username = $_POST['username'];
$sex = $_POST['sex'];
$password = $_POST['password'];
setcookie('username',$username);
setcookie('password',$password);
$_SESSION['username'] =$username;
$_SESSION['password'] = $password;
$link = new  DB();
$conn = $link->conn();

$sql = "INSERT INTO user(username,sex,password) VALUE ('$username','$sex','$password')";
$result = mysqli_query($conn,$sql);
if($result) {
    echo "注册成功,三秒后跳转到<a href='list.php'>列表页</a>";
    header("refresh:3;url=./list.php");
}else{
    echo "注册失败";
}
