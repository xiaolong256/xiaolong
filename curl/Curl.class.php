<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/21
 * Time: 14:06
 */

class  Curl
{
    public function download($url,$options=array())
    {
        $ch = curl_init($url);
        curl_setopt_array($ch,$options);
        curl_exec($ch);
        curl_close($ch);
        return true;
    }

    public function save($filename,$contents)
    {
        $fp = fopen($filename,'w');
        fwrite($fp,$contents);
        fclose($fp);
        return true;

    }
}