<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <link rel="stylesheet" type="text/css" href="../includes/style.css">
  <title>Клиенты</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
 <table class=big>
	<tr valign="top">
	<td class=bar align=center > <img src="../i2.png" alt=" Вернуться на главную " width="60" height="60" border="0"  usemap="#karta1"> 
			<map name="karta1"> <area shape="rect" coords="0,0,60,60"   href="../menu.html.php"><br>На главную <br>
			<img src="../www.yourcodes.tr.gg377.png" alt=" Новый клиент " width="60" height="60" border="0"  usemap="#karta"> 
			<map name="karta"> <area shape="rect" coords="0,0,60,60" href="../edit/Client_E/C_controller.php?Add=1" method=get><br>Новый клиент<br>
			<img src="../back.png" alt=" Новый клиент " width="60" height="60" border="0"  usemap="#karta2"> 
			<map name="karta2"> <area shape="rect" coords="0,0,60,60" href="newdelivery.html.php" method=get><br><br></td>
	<td width=95% align=center><br><br><br>
		<h2 align=center >Список клиентов с указанной фамилией</h2><br>
		<table class=list border=1>
			<tr>
				<td align=center> Номер </td>
				<td align=center> Фамилия</td> 
				<td align=center> Адрес</td> 
				<td align=center> Телефон</td> 
				<td align=center> Вес перевезенного груза</td> 
			</tr><?php foreach ($clients as $client):?>
			<tr> 
				<td align=center> <?php echo $client['id'];?></td>
				<td align=center> <a href=" ?C_id=<?php echo $client['id'];?>"><?php echo $client['name'];?></a></td>
				<td align=center> <?php echo $client['adress'];?></td>
				<td align=center> +7<?php echo $client['phone'];?></td>
				<td align=center> <?php echo $client['weight'];?></td>
			</tr><?php endforeach; ?>
		</table>
	</td></tr></table>
</body> 
</html>