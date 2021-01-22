<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/21
 * Time: 13:06
 */
$url = "https://25443383.s61i.faiusr.com/4/AD0It-iQDBAEGAAgtKiV-AUo4Lu_ywIwPDha.png";
$options = [
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYPEER  => false,
];
$contents = new Curl();
$value = $contents->download($url,$options);
$filename = date('Ymdhis').'.png';

$contents->save($filename,$value);