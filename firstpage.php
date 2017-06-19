<?php
require_once "autorisation.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="style/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      // Slideshow 3
      $("#slider3").responsiveSlides({
      	maxwidth: "500px",
      	maxheight: "200px",
      });
    });
  </script>
  <script type="text/javascript" src="//vk.com/js/api/openapi.js?144"></script>
<script type="text/javascript">
VK.Widgets.Subscribe("vk_subscribe", {}, -98474017);
</script>
<script src="https://apis.google.com/js/platform.js"></script>
<style type="text/css">
#account{background: #cfecfb; position: absolute; width: 17%; left: 82.56%; top: 14%;}
	#data{
		margin-left: 10px;
		font-size: 25px;
		font-family: 'Oswald', sans-serif;
		float: left;
	}
	#text{
		text-align: justify; font-family: 'Cormorant Garamond', serif; 
	}
	#text_sobitiy{
		margin-top: 35px;
	}
	#imgYPK{
		border: 2px solid black;
		border-radius: 5px 10px 15px 30px/30px 15px 10px 5px;
		width: 90%;
		height: 75%;
		margin: 5px;
	}
	#img_skl{
		float: left;
		width: 200px;
		height: 150px;
		margin-left: 7px;
	}
	#text_skl{
		font-size: 17px;
		margin-left: 20px;
		font-family: 'Cormorant Unicase', serif;
	}
	#sost_skl{
		font-size: 25px;
		margin-left: 20px;
	}
	#img_div{
		background: #eef5e8;
		box-shadow: 0 0 10px rgba(0,0,0,0.5);
		margin: 20px;
		padding: 10px;
		height: 150px;
	}
	#crusn{
		margin-left: 160px; 
	}
	#predl_blok{
		padding: 15px;
		box-shadow: 0 0 10px rgba(0,0,0,0.5);
		margin: auto;
		width: 90%;
	}
	#img_id{
		background: black;
		width: 90%;
	}
	#skl_div{
		width: 100%;
	}
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
</head>
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
echo "<a class='clmenu' href='vedomost.php?login=". $_SESSION['log'] ."&pas=". $_SESSION['pass'] ."'>Ведомость</a>";
echo "</div>";
?>
	
</center>
</div>
</div>
<br>
<br>

<center>
<h1>Расписание</h1>
<iframe src="https://docs.google.com/spreadsheets/d/1JbT8d4gGSRgOepINPxa4hiv7jjqG9Ou3-EvhlBdsqls/pubhtml?widget=true&amp;headers=false"width="1000"height="500"></iframe>
</center>
</content>
</div>
</div>

</body>
</html>