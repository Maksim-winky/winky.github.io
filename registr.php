<?
require_once "autorisation.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title> Регистрация пользователя </title>
	<meta charset="UTF-8">
</head>
<style type="text/css">
	
	#menu_center{background: white; position: absolute; top: 14%; left: 19%;  width: 62%; height: 60px; border:1px; box-shadow: 0 0 10px rgba(0,0,0,0.5);}
	img{width:200px; height:150px;}
	content{position: center;}
	body{background: #eef5e8;}
	#cont{background: white; width: 60%; margin: auto; padding: 15px; }
	#poiskid{position: absolute;}
	a{text-decoration: none;}
	#logo{font-size: 15px;}
	#head{background: #cfecfb; height: 100px; width: 100%;}
	#piclog{float:left; width: 230px; height: 220px;}
	#Menu{background: white;  width: 98%; height: 19%; padding: 15px;}
	#kolname{margin-left: 20px; padding: 20px;}
	.clmenu{margin:10px; font-size: 25px; float:left;}
	#Search{position: absolute; right: 20px; margin-top: 15px;}
	#account{background: #cfecfb; position: absolute; width: 17%; right: 29px; top: 29%;}
	.avt{margin: 5px;}
  #kolname{ 
font-size: 20px; 
line-height: 8px; 
font-family: 'Open Sans', sans-serif; 
position: relative; 
margin: auto; 
padding: 10px; 
} 
#kolname2{ 
font-size: 35px; 
font-weight: bolder; 
line-height: 8px; 
font-family: 'Open Sans', sans-serif; 
position: relative; 
margin: auto; 
padding: 10px; 
}
</style>
<body>
<div id="head">
<img src="jpg/logo.png" id='piclog'>
</p>
</p>

<h4 id="kolname"><center>Государственное автономное профессиональное образовательное учреждение Свердловской области</center></h4> 
<h3 id="kolname2"><center>«Уральский политехнический колледж - Межрегиональный центр компетенций»</center></h3>
</div>
<div id="Menu">
<div id="menu_center">
<center>
<?
echo "<div id='menunews'>";
echo "<a class='clmenu' href='firstpage.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."'>Главная</a>";
echo "</div>";
echo "<div id='menunews'>";
echo "<a class='clmenu' href='mater.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."'>Материалы курса</a>";
echo "</div>";
echo "<div id='menunews'>";
echo "<a class='clmenu' href='lab.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."'>Лабораторные работы</a>";
echo "</div>";
echo "<div id='menunews'>";
echo "<a class='clmenu' href='vedomost.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."'>>Ведомость</a>";
echo "</div>";
?>
</center>
</div>


</div>

<br>
<br>
<div id="cont">
<content>
 <H2>Регистрация на сайте:</H2>
 <form action="registr.php" metod="GET">
  
  <br>Ваше имя пользователя: <input name="login" size="15" type="text">
  <br>
  <br>Пароль:  <input name="password" size="15" type="password">
  <br>
  <br>ФИО: <input name="name" size="20" type="text">
  <br>

  <p><input name="add" type="submit" value="Зарегистрировать">
  
  <input name="b2" type="reset" value="Очистить поля"></p>
 
 </form>
 <p>
</content>
</div>
</body>
</html>

<?php
$host="localhost";
    $user="root";
    $pass="";
    $db_name="files";

    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);

  $Reg_username = $_GET['login'];
  $Reg_name = $_GET['name'];
  $Reg_password = $_GET['password'];
    
	$tre = "false";

    if(!empty($Reg_username) && !empty($Reg_name) && !empty($Reg_password)){
     $result=mysql_query('SELECT * FROM `users`');
        while($row=mysql_fetch_array($result))
        {
      if($row['LoginUser'] == $Reg_username){
     $tre = "true";
      echo "Такое имя пользователя уже есть";
      }
  }
	if($tre == "false"){
	echo "Поздравляем, ваш аккаунт успешно зарегистрирован!";
	}
	mysql_query("INSERT INTO `files`.`users` (`Name`, `LoginUser`, `Password`) VALUES ('$Reg_name', '$Reg_username', '$Reg_password')");
  }

    else{
    	echo "Пожалуйста, заполните все поля";
    }
?>