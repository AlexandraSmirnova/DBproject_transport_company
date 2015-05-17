<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600">
  <link rel="stylesheet" type="text/css" href="../includes/style.css">  
  <title>Товаро-транспортная накладная</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
 <br><br><br>
 <form action =" ?Delete"  method=post>
		<h2 align=center> Товаро-транспортная накладная </h2><br>
		<p align=center>
			<table width=20% align=center>
				<tr>
					<td>Клиент: 	
					<td><?php  	foreach ($clients as $client):
									echo $client['name'];
								endforeach; ?> <br>
				</tr>
				<tr>
					<td>Водитель: 
					<td><?php  	foreach ($drivers as $driver):
									echo $driver['name'];
								endforeach; ?> <br>
				</tr>
				<tr>	
					<td>Автомобиль:
					<td><?php foreach ($autos as $auto):
								echo $auto['mark'];?>(<?php echo $auto['year'];?>)
						<?php endforeach; ?><br>
				</tr>
				<tr>
					<td>Дата: </td>
					<td><?php echo $date; ?> <br></td>
				</tr>
				<tr>
					<td>Вес:</td>
					<td><?php echo $weight; ?> <br></td>
				</tr>
				<tr>
					<td>Адрес назначения:</td>
					<td> <?php echo $adress; ?> <br></td>
				</tr>
				<tr>		
					<td> Цена: </td>
					<td><?php echo $cost; ?>р.<br><td>
				</tr>
				<tr>	
					<td><br><input type="hidden" name="del" value=<?php echo $max; ?>>
						<input type="submit" value="Отменить заявку">
					<td><br><input type="button" value="Подтвердить" onclick="location.href='success.html'">
				</tr>
			</table>
	</form>
  </body> 
</html>