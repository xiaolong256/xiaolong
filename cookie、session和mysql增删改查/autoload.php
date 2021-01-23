<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/22
 * Time: 16:17
 */
spl_autoload_register("databases");

function databases($className)
{
    $filename =__DIR__."/lei/".$className.'.class.php';
    if(file_exists($filename)) {
        require_once $filename;
    }else{
        echo "自动加载类失败";
    }
}

$link = new  DB();
$link->conn();