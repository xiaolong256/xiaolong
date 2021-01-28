<?php

require_once 'memcache.class.php';

$host = "127.0.0.1";
$port = 11211;
$obj = new Memcaches($host,$port);
//$obj->add('zhangsan','lisi',3600);
//$obj->get('zhangsan');

$obj->add('number',21,3600);
$obj->decre('number',1);
$obj->increment('number',4);
$obj->del('number',10);
$obj->replace('number',10,0,10);



