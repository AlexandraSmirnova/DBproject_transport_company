<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600">
   <title> Редактирование водителя </title>    
  <link rel="stylesheet" type="text/css" href="../../includes/style.css">   
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Редактирование водителя</h2>
   <div align=center>
   <form action ="?" method="post">
		<?php foreach ($drivers as $driver):?>
		<table border=0 width=40% align=center><tbody >
			<input type="hidden" name="id" value=<?php echo $driver['id']; ?>>
			<tr>
				<td><label for=name> Фамилия водителя </label><br><br></td> 
				<td align=right><input type=text id=name name=ename value=<?php echo $driver['name']; ?>> <br><br></td><br><br></td> 
			</tr>
			<tr>
				<td><label for=adress> Город </label><br><br></td>
				<td align=right><input type=text id=city name=ecity value=<?php echo $driver['city']; ?>> <br><br></td> 
			</tr> 
			<tr>
				<td><label for=phone> Дата приема на работу</label><br><br></td> 
				<td align=right><input type=text id=phone name=edate1 value=<?php echo $driver['date1']; ?>> <br><br></td> 
			</tr> 
			<tr>
				<td><label for=phone> Дата увольнения</label><br><br></td> 
				<td align=right><input type=text id=phone name=edate2 value=<?php echo $driver['date2']; ?>> <br><br></td> 
			</tr> 
				<td> <input type=reset   value=Очистить > </td>
				<td align=right><input type=submit value=Отправить> </td> 
			</tbody></table>
		<?php endforeach; ?>
		<table border=0 width=40% align=center>
		  <tbody >
		 <tr>  
			<td align=left> <input type="button" value="Вернуться в меню редактирования" onclick="location.href='../menu_E.html.php'">	</td>   
			<td align=right>  	<input type="button" value="Вернуться на главную" onclick="location.href='../../menu.html.php'"></td>   
       	 </tr> 
 </body></table>	  
   </body>
</html>  