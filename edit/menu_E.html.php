<?php session_start();
if (empty($_SESSION['role']))
{
	$output= "Пожалуйста, авторизуйтесь!";
	include '../includes/output.html.php';
	exit();
}
else if($_SESSION['role']!='registrator' and $_SESSION['role']!='admin')
{
	$output="У вас недостаточно прав для этого пункта меню";
	include '../includes/output.html.php';
	exit();
}
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Редактирование</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
 <br><br><br>
 <div align=center>
 <h1>Редактирование</h1>
 <h3><a href="http://localhost/project/edit/Client_E/C_controller.php">Клиенты</a></h3>
 <h3><a href="http://localhost/project/edit/Driver_E/D_controller.php">Водители</a></h3>
 <h3><a href="http://localhost/project/edit/Auto_E/A_controller.php">Автомобили</a></h3>
 <input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'">
  </body> 
</html>