<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Редактирование автомобилей</title>
	<style type="text/css"> 
	h1, h2, h3{color: FF8C00;}
	</style> 
  </head>
 <br><br><br>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
 <h1 align=center>Список всех автомобилей</h1>
 <h3 align=center>Всего автомобилей: <?php echo $nom;?>
 <img src="../../www.yourcodes.tr.gg377.png" alt=" Новый клиент " align=right width="40" height="40" border="0"  usemap="#karta"> 
					<map name="karta"> <area shape="rect" coords="0,0,40,40" href="?Add"></h3>
 <table border=1 width=80%  align=center bgcolor="333333" class=list>
   <tbody >
		<tr>
            <td align=center> Марка </td>   
			<td align=center> Год</td>   
			<td align=center> Грузоподъемномсть, кг</td>   
			<td align=center> Вместимость, м<sup>3</sup> </td> 
			<td align=center colspan="2"> Действие </td> 
       	</tr>
		<?php foreach ($autos as $auto):?> 
		
		<tr>
            <td align=center> <?php echo $auto['mark'];?></td>   
			<td align=center> <?php echo $auto['year'];?>	</td>   
			<td align=center> <?php echo $auto['capacity'];?> </td>
			<td align=center> <?php echo $auto['valume'];?> </td>
            <td align=center ><form action=" ?Edit" method="Post">
					<input type="hidden" name="id" value=<?php echo $auto['id']; ?>>
					<input type="submit" value="Редактировать"></form></td> 
			<td align=center><form action=" ?Delete" method="Post">
					<input type="hidden" name="id" value=<?php echo $auto['id']; ?>>
					<input type="submit" value="Удалить"></form></td> 
		</tr>
		<?php endforeach; ?>
    </tbody>
	</table>
	<table border=0 width=80% align=center>
		  <tbody >
		 <tr>  
			<td align=left> <input type="button" value="Вернуться в меню редактирования" onclick="location.href='../menu_E.html.php'">	</td>   
			<td align=right>  	<input type="button" value="Вернуться на главную" onclick="location.href='../../menu.html.php'"></td>   
       	 </tr> 
 </body>
 </html>