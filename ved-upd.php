<?php
$_FILES['userfile']['name'];  
$_FILES['userfile']['type'];  
$_FILES['userfile']['size'];  
$_FILES['userfile']['tmp_name'];  
$_FILES['userfile']['error'];  

$uploaddir = '';  
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);  
//--- 
clearstatcache();//очистим кеш для избежания ошибки 
if(is_file($uploadfile)){//проверяем есть ли такой файл 
  if(@unlink($uploadfile)){//удаляем если есть 
    if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {  
      chmod($uploadfile,0777);//устанавливаем права 
      print "Файл обновлен!";  
    }else{  
      print "Ошибка при копировании1!";  
    }    
  }else{//если файл заблокирован 
    print "Невозможно удалить файл!";  
  } 
}else{//сли нет то пишем 
  if (@move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {  
    chmod($uploadfile,0777);//устанавливаем права 
    print "Файл записан!";  
  }else{  
    print "Ошибка при копировании2!"; 
  }   
}  
?>