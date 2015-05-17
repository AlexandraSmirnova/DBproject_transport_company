<?php session_start();
if (empty($_SESSION['role'])){
	$output= "Пожалуйста, авторизуйтесь!";
	include '../includes/output.html.php';
	exit();
}
else if($_SESSION['role']!='admin' and $_SESSION['role']!='registrator'){
	$output="У вас недостаточно прав для этого пункта меню";
	include '../includes/output.html.php';
	exit();
}?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="60"> 
  <link rel="stylesheet" type="text/css" href="../includes/style.css">
  <title>Новая заявка</title>
 </head>
<body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
<table class=big>
	<tr valign="top">
	<td class=bar align=center > 
		<img src="../i2.png" alt=" Вернуться на главную " width="60" height="60" border="0"  usemap="#karta1"> 
		<map name="karta1"> <area shape="rect" coords="0,0,60,60" href="../menu.html.php"><br>На главную<br>
		<img src="../www.yourcodes.tr.gg377.png" alt=" Новый клиент " width="60" height="60" border="0"  usemap="#karta"> 
		<map name="karta"> <area shape="rect" coords="0,0,60,60" href="../edit/Client_E/C_controller.php?Add=1" method=get><br>Новый клиент<br></td>
	<td width=95%><br><br><br>
		<h2 align= center > Введите имя клиента:</h2><br>
		<form action =http://localhost/project/main/clients.php  method=get>    
			<div align=center> Имя клиента<input type=text name=firstname> <br> <br><br>     
				<table border=0 width=40%>
					<tr>
						<td align=left> <input type=reset   value=Очистить > </td>
						<td align=right>  <input type=submit name=send value=Отправить>	</td>   
					</tr>  
				</table></div></form>
	</td></tr></table>
</body> 
</html>
