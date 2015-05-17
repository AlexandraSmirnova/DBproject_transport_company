<?php session_start();?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Главная страница</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8A00" link="00FF00" background="http://localhost/project/dm8v.jpg">
 <div align=center>
	<br><br><br><h1>
	<a href="http://localhost/project/main/newdelivery.html.php"> Новая заявка</a><p>
	<a href="http://localhost/project/queries/menu_Q.html.php"> Просмотр отчетов</a><p>
	<a href="http://localhost/project/edit/menu_E.html.php"> Редактирование</a><p>
	<?php 
		if ($_SESSION['visits']>=1){
		$string='Выход из системы';
		$hreff="http://localhost/project/autorization/User_control.php?exit";
	}
	else{
		$string='Авторизация';
		$hreff="http://localhost/project/autorization/User_control.php";
	}?>
	<a href=<?php echo $hreff?> method=post> <?php echo $string;?></a></h1></div>
 </body> 
</html>