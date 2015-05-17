<?php session_start();
if (empty($_SESSION['role']))
{
	$output= "Пожалуйста, авторизуйтесь!";
	include '../includes/output.html.php';
	exit();
}
else if($_SESSION['role']!='admin' and $_SESSION['role']!='director')
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
  <title>Новый отчет</title>
   <link rel="stylesheet" type="text/css" href="http://localhost/project/includes/style.css">
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
 <br><br><br>
<h2 align=center >Введите год</h2>
<div align=center> <br>
 <form action ="http://localhost/project/queries/que3.php"  method=get>    
    <table border=0 width=50%>
         <tbody>
			
			<tr>
				<td align=center>   Год<input type=text name=year> <br> <br><br> </td>   
			</tr> 
			
	<table border=0 width=50%>
		<tbody>			
			<tr>
				<td align=center width=50%> <input type=reset   value= Очистить > </td>
				<td align=center>  <input type=submit name=send value= Отправить>	</td>   
			</tr> 
		 </tbody>  
	 </table>
	 <p>
	<input type="button" value="Вернуться в меню запросов" onclick="location.href='menu_Q.html.php'"><br><br>
	<input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'">
</form>
</div>  
 <br><br><br>
 </body> 
</html>