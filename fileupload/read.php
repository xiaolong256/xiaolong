<?php
#读取整个文件
#$homepage = '/www/upload/2.html';
#$file =fopen($homepage,'rb');
#$contents = fread($file,filesize($homepage));
#fclose($file);
#echo $contents;



#读取一行 
$homepage = '/www/upload/2.html';
#$file = fopen($homepage,'rb');
#$contents = fgets($file,4096);
#读取下一行
#$contents = fgets($file,4096);
#echo $contents; 

#写入文件，将指针放在指向文件末尾
#$file = fopen($homepage,'ab+');
#fwrite($file,'这是我加入的一行');

//将整个文件的内容读入到数组里
#$file = file($homepage);
#var_dump($file);

//将文件读入到字符串
#$file = file_get_contents($homepage);
#echo $file; 
#读取文件
readfile($homepage);
