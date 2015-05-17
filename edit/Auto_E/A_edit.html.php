<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600">
   <link rel="stylesheet" type="text/css" href="../../includes/style.css">
   <title> Редактирование водителя </title>        
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
   <table class=big>
	<tr valign="top">
	<td class=bar align=center > 
		<img src="../../i2.png" alt=" Вернуться на главную " width="60" height="60" border="0"  usemap="#karta1"> 
		<map name="karta1"> <area shape="rect" coords="0,0,60,60" href="../../menu.html.php"><br>На главную<br><br>
		<img src="../../back.png" alt=" Назад " width="60" height="60" border="0"  usemap="#karta2">  
		<map name="karta2"> <area shape="rect" coords="0,0,60,60" href="../menu_E.html.php"></td>
	<td width=95%><br><br><br>
   <h1 align=center>Редактирование автомобиля</h1><br>
   <form action ="?" method="post">
		<div align=center>
		<table border=0 width=30% align=center><tbody>
		<?php foreach ($autos as $auto):?>
			<input type="hidden" name="id" value=<?php echo $auto['id']; ?>>
			<tr>
				<td><label for=mark>Марка автомобиля </label><br><br></td> 
				<td align=right><input type=text id=mark name=emark value=<?php echo $auto['mark']; ?>> <br><br></td>
			</tr>
			<tr>
				<td><label for=year> Год выпуска </label><br><br></td>
				<td align=right><input type=text id=year name=eyear value=<?php echo $auto['year']; ?>> <br><br></td> 
			</tr> 
			<tr>
				<td><label for=capacity> Грузоподъемность</label><br><br></td> 
				<td align=right><input type=text id=phone name=ecapacity value=<?php echo $auto['capacity']; ?>> <br><br></td> 
			</tr> 
			<tr>
				<td><label for=valume> Объем</label><br><br></td> 
				<td align=right><input type=text id=valume name=evalume value=<?php echo $auto['valume']; ?>> <br><br></td> 
			</tr> 
				<td> <input type=reset   value=Очистить > </td>
				<td align=right><input type=submit value=Отправить> </td> 
			<?php endforeach; ?>
			</tbody></table></div></form>
		
</td><tr></table> 
   </body>
</html>  