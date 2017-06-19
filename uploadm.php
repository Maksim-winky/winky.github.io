<?php
// Объявим глобальные переменные 
global $sql_table, $admin; 
// Параметры подключения к БД 
$host="localhost"; 
$user="root"; 
$pass=""; 
$db_name="files"; 

$link=mysql_connect($host,$user,$pass); 
mysql_select_db($db_name,$link);



    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Хмм, что то неверно, например это: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
    	$name = $_FILES['file']['name'];
    	$img = $_FILES['file']['name'];
    	$sql = "INSERT INTO mats (mat, name) VALUES ('$name', '$img')"; 
mysql_query($sql);
        move_uploaded_file($_FILES['file']['tmp_name'], 'mtr/' . $_FILES['file']['name']);
    }
?>
Страница сама обновится через 1.05 секунды