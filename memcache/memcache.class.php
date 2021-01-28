<?php

class Memcaches
{  
   private $mem;
   private $host;
   private $port;
   public function __construct($host,$port)
   {
      $this->mem = new Memcache;
      $this->host     = $host;
      $this->port     = $port;
      $this->mem->addServer($this->host,$this->port);
   }


   public function add($key,$value,$expire)
   {
     $result =  $this->mem->add($key,$value,false,$expire);
     if($result){
        echo '添加成功';
     }else{
        echo '添加失败';
     }
   }


   public function get($key)
   {
     $result = $this->mem->get($key);
     if($result) {
        var_dump($result);
     }else{
       var_dump($result);
     }
   }

   public function  decre(string $key,int $value)
   {
     $result = $this->mem->decrement($key,$value);
     if($result) {
        var_dump($result);
     }else{
       var_dump($result);
     }
   }

    public function del(string $key,int $timeout)
    {
       $result = $this->mem->delete($key,$timeout);
        if($result) {
            echo $timeout.'后删除成功';
        }else{
            echo '删除失败';
        }
         
    }

   public function increment(string $key,$value)
   {
     $result = $this->mem->increment($key,$value);
     if($result) {
        var_dump($result);
     }else{
       var_dump($result);
     }
     
    }
    public function replace(string $key,$var,int $flag,int $expire)
    {
       $result = $this->mem->replace($key,$var,$flag.$expire);
     if($result) {
        var_dump($result);
     }else{
       var_dump($result);
     }
    }
}
