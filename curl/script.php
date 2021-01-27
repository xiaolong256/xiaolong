<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/21
 * Time: 13:42
 */
//header('Content-Type:application/x-javascript');
require_once 'Curl.class.php';
$url = "https://1.ss.faisys.com/js/dist/salesPromotion.min.js?v=202101131356";
$options = [
    CURLOPT_HEADER => false,         //设置不显示响应头
    CURLOPT_RETURNTRANSFER  => true,  //返回原生的输出
    CURLOPT_SSL_VERIFYPEER  => false,//不检查ssl
    CURLOPT_ENCODING        => true, //这使得能够解码响应的内容
];
$contents = new Curl();
$value=$contents->download($url,$options);
$filename ='script.'.time().'.js';
$contents->save($filename,$value);