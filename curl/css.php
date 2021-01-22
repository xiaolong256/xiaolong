<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/21
* Time: 13:56
*/
require_once 'Curl.class.php';
$contents = new  Curl();
$url = "https://2.ss.faisys.com/css/rcss/dist/styles/fontsIcon.min.css?v=202010261318";
$options = [
    CURLOPT_RETURNTRANSFER =>true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_ENCODING        =>'gzip',   //解码响应的内容Accept-Encoding:的值
];
$value=$contents->download($url,$options);
$filename = "fkw.css";
$contents->save($filename,$value);