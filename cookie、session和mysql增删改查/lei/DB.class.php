<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/1/22
 * Time: 16:15
 */

require_once  __DIR__.'/../config/config.php';

class DB
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;

    public function __construct()
    {
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
        $this->port = PORT;
    }

    public function conn()
    {
        $link = @mysqli_connect($this->host,$this->user,$this->password,$this->database,$this->port);
        if(mysqli_errno($link)) {
            var_dump($link);
        }else{
//            echo "数据库连接成功";
        }
        return $link;
    }



}