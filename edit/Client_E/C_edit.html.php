<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600">
   <title> Редактирование клиента </title> 
    <link rel="stylesheet" type="text/css" href="../../includes/style.css">     
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Редактирование клиента</h2> <?php echo $clients['name']; ?>
   <form action ="?" method="post">
		<div align=center>
		<?php foreach ($clients as $client):?>
		<table border=0 width=40% align=center><tbody >
			<input type="hidden" name="id" value=<?php echo $client['id']; ?>>
			<tr>
				<td><label for=name> Фамилия клиента </label><br><br></td> 
				<td align=right><input type=text id=name name=ename value=<?php echo $client['name']; ?>> <br><br></td><br><br></td> 
			</tr>
			<tr>
				<td><label for=adress> Адрес </label><br><br></td>
				<td align=right><input type=text id=adress name=eadress maxlength="100" value="<?php echo $client['adress']; ?>"> <br><br></td> 
			</tr> 
			<tr>
				<td><label for=phone> Телефон</label><br><br></td> 
				<td align=right>+7<input type=text id=phone  name=ephone minlength="7" value=<?php echo $client['phone']; ?>> <br><br></td> 
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