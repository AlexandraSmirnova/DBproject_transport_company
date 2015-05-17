<?php session_start();
if (empty($_SESSION['role']))
{
	$output= "Пожалуйста, авторизуйтесь!";
	include '../includes/output.html.php';
	exit();
}
else if($_SESSION['role']=='registrator')
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
  <title>Исследование бизнеса</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
 <br><br><br>
 <div align=center>
 <h1>Выберите отчет</h1>
 <h3><a href="form1.html.php">Посмотреть отчет о перевозках по клиентам</a></h3>
 <h3><a href="form2.html.php">Посмотреть отчет о перевозках по водителям</a></h3>
 <h3><a href="form3.html.php">Средний вес по месяцам</a></h3>
 <h3><a href="form4.html.php">Адреса перевозок</a></h3>
 <h3><a href="form5.html.php">Стоимость перевозок за месяц</a></h3>
 <input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'">
  </body> 
</html>