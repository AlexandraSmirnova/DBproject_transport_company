<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Новая перевозка</title>
  <link rel="stylesheet" type="text/css" href="../includes/style.css">
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg"><table class=big>
	<tr valign="top">
	<td class=bar align=center > 
		<img src="../i2.png" alt=" Вернуться на главную " width="60" height="60" border="0"  usemap="#karta1"> 
		<map name="karta1"> <area shape="rect" coords="0,0,60,60" href="../menu.html.php"><br>На главную<br>
		<img src="../back.png" alt=" Назад " width="60" height="60" border="0"  usemap="#karta2"> 
		<map name="karta2"> <area shape="rect" coords="0,0,60,60" href="newdelivery.html.php"></td>
	<td width=95%><br><br><br>
		<h2 align=center> Новая перевозка </h2><br>
		<form action =" ?Info"  method=post>  
			<div align=center>		
				<table border=0 width=50% align=center>
					<tr> 
						<td align=right  width=50%> Дата перевозки<br> <br><br> </td>
						<td align=left> <input type=text name=date> <br><br><br></td>
					</tr>
					<tr >
						<td align=right  width=50%> Адрес назначения<br> <br><br> </td>
						<td align=left>  <textarea name=adress rows="1" cols="22"></textarea><!--<input type=text name=adress size=20>--><br><br><br> </td>   
					</tr>
					<tr width=25%>
						<td align=right> Вес груза <br> <br><br></td>
						<td align=left>  <input type=text name=weight> <br> <br><br> </td>   
					</tr>  		 
					<tr>
						<input type="hidden" name="id" value=<?php echo $C_id; ?>>
						<td align=center> <input type=reset   value= Очистить > </td>
						<td align=center>  <input type=submit name=send value= Отправить>	</td>   
					</tr> 
				</table>
			<font class=errors><?php if($error_str){ echo $error_str;}?></font>  
		</form></td></tr></table>
 </body> 
</html>