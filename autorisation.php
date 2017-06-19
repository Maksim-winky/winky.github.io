<!DOCTYPE html>
<html lang="ru">
<head>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?
// Объявим глобальные переменные
global $sql_table, $admin;
// Параметры подключения к БД
 $host="localhost";
  $user="root";
  $pass="";
  $db_name="files";

  $link=mysql_connect($host,$user,$pass);
  mysql_select_db($db_name,$link);
?>
<center>
<div id="account">

<?php

if($_SESSION['autorisation'] != "true"){

	$_SESSION['autorisation'] = "false";

}

if(!empty($_GET['login']) && !empty($_GET['pas'])) {
        $result=mysql_query('SELECT * FROM `users`');
        while($row=mysql_fetch_array($result)){
      if($row['LoginUser'] == $_GET['login']){
if($row['Password'] == $_GET['pas']){

$_SESSION['log'] = $_GET['login'];
$_SESSION['pass'] = $_GET['pas'];
$_SESSION['Priorety'] = $row['Priorety'];
$_SESSION['autorisation'] = "true";

$login = $_SESSION['log'];
$pass = $_SESSION['pass'];
$pryor = $_SESSION['Priorety'];
}
  }
    }
      }

if(!empty($_SESSION['log']) && !empty($_SESSION['pass'])) {
        $result=mysql_query('SELECT * FROM `users`');
        while($row=mysql_fetch_array($result)){
      if($row['LoginUser'] == $_SESSION['log']){
if($row['Password'] == $_SESSION['pass']){

$_SESSION['autorisation'] = "true";

}
  }
    }
      }

if(isset($_POST['exit'])){

$_SESSION['log'] = "";
$_SESSION['pass'] = "";
$_SESSION['Priorety'] = "";
$_SESSION['autorisation'] = "false";

}

if($_SESSION['autorisation'] == "false"){
echo '<h1>Авторизация пользователя</h1>';
echo '<form action="firstpage.php" method="GET">';
echo 'Логин<input class="avt" type="text" name="login">';
echo '<p>Пароль<input class="avt" type="password" name="pas">';
echo '<input class="avt" type="submit" name="">';
echo '<p></p>';
echo "<a href='regpage.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."&pryority=".$_SESSION['Priorety']."'>Регистрация</a>";
echo '</form>';
}

elseif ($_SESSION['autorisation'] == "true") {
	$l = $_SESSION['log'];
	echo "<center>";
  echo "<h1>Приветствую, $l </h1>";
    $result=mysql_query('SELECT * FROM `users`');
        while($row=mysql_fetch_array($result)){
          if($row['LoginUser'] == $l){
  
  echo "<br>";
              }
        }

	echo "<form action='firstpage.php' method='POST'>";
  echo "<br>";
	echo "<button name='exit'>Выйти из профиля</button>";
	echo "</form>";
  echo "</center>";
}
?>
<br>
<br>
</div>
</center>
</body>
</html>
