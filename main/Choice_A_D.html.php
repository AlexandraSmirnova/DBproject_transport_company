<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <link rel="stylesheet" type="text/css" href="http://localhost/project/includes/style.css">
  <title>Выбор водителя и авто</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
	<table class=big>
		<tr valign="top">
			<td class=bar align=center > <img src="../i2.png" alt=" Вернуться на главную " width="60" height="60" border="0"  usemap="#karta1"> 
				<map name="karta1"> <area shape="rect" coords="0,0,60,60" href="../menu.html.php"><br>На главную <br>
				<img src="../back.png" alt=" Назад " width="60" height="60" border="0"  usemap="#karta2"> 
				<map name="karta2"> <area shape="rect" coords="0,0,60,60" href=" ?C_id"></td>				
			<td><br><br><br>
				<div align=center>
					<h2 align=center> Выберите водителя и автомобиль </h2><br>
					<table  class=main>
						<form action =" ?Ch"  method=post>
							<input type="hidden" name="id" value=<?php echo $id; ?>>
							<input type="hidden" name="date" value=<?php echo $date; ?>>
							<input type="hidden" name="adress" value="<?php echo $adress; ?>">
							<input type="hidden" name="weight" value=<?php echo $weight; ?>>
							<tr valign="top">
								<td align=left weight=50%  ><div align=center>Водители</div> <br>
									<?php foreach ($drivers as $driver):?> 
										<input type="radio" name="radio1" value=<?php echo $driver['id'];?> checked>
										<?php echo $driver['name'];?><br>
									<?php endforeach; ?>
								</td>
								<td align=left weight=50% ><div align=center>Автомобили</div> <br>
									<?php foreach ($autos as $auto):?> 
										<input type="radio" name="radio2" value=<?php echo $auto['id'];?> checked>
										<?php echo $auto['mark'];?>(<?php echo $auto['year'];?>)<br>
									<?php endforeach; ?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td align=left> <input type=submit name=send value= Далее></td>				
							</tr>
						</form>
					</table>
			</td>
		</tr>
	</table>
 </body>
 </html>