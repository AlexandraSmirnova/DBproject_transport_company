 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600">
  <title> Добавление нового клиента </title>       
  <link rel="stylesheet" type="text/css" href="../../includes/style.css">  
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
 <br><br><br>
   <h2 align=center>Новый клиент</h2>
   <?php if($Add==1)	$hreff="?goto";
		$hreff="?";?><br>
    <form action =<?php echo $hreff;?> method="post">
	<div align=center>
	<table border=0 width=40% >
		<tr>
			<td><label for=name> Введите фамилию клиента </label><br><br></td> 
			<td align=right><input type=text id=name name=sname> <br><br></td> 
		</tr>
		<tr>
			<td><label for=adress> Введите адресс </label><br><br></td>
			<td align=right><input type=text id=adress name=sadress> <br><br></td> 
		</tr> 
		<tr>
			<td><label for=phone> Введите телефон</label><br><br></td> 
			<td align=right>+7<input type=text id=phone name=sphone> <br><br></td> 
		</tr> 
			<td> <input type=reset   value= Очистить > </td>
			<td align=right><input type=submit value= Отправить> </td> 
	   </table>
<table border=0 width=40% align=center>
		  <tbody >
		 <tr>  
			<td align=left> <input type="button" value="Вернуться в меню редактирования" onclick="location.href='../menu_E.html.php'">	</td>   
			<td align=right>  	<input type="button" value="Вернуться на главную" onclick="location.href='../../menu.html.php'"></td>   
       	 </tr> 
 </body></table>	  
   </body>
</html>  