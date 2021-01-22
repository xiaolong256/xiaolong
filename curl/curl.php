<?php
require_once 'Curl.class.php';

$url = "https://fkwshfw06.jz.fkw.com/";
$options = [
    CURLOPT_URL =>$url,
    CURLOPT_RETURNTRANSFER =>true, //  返回原生输出
    CURLOPT_SSL_VERIFYPEER =>false, //禁止对curl验证对等证书
    //CURLOPT_CONNECTTIMEOUT =>true,  //尝试连接时等待的秒数
    ];
$contents = new Curl();
$result = $contents->download($url,$options);
$filename = 'test.html';
$save = $contents->save($filename,$result);

$fp = fopen("errors.txt", "a");
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}


