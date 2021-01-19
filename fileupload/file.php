<?php
$addir = '/www/upload/';
$uploadfile = $addir.basename($_FILES['files']['name']);

$result = move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);
if($result){
   echo '文件上传成功!';
}else{
    echo '文件上传失败';
}


#var_dump (file($uploadfile));
#$homepage=file_get_contents($uploadfile);
#echo $homepage;
