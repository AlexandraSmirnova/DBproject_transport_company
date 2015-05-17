<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <link rel="stylesheet" type="text/css" href="../includes/style.css">  
  <title>Новый отчет</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Адреса перевозок на <?php echo "$day.$month.$year";?> </h2><br>
   <p align=center><br>
	<table border=1 align=center class=list>
   <tbody >
          <tr>
			<td align=center>  Номер накладной</td> 
			<td align=center>  Имя клиента</td>
			<td align=center>  Адрес отправления </td> 
			<td align=center>  Адрес назначения	</td>  
       	 </tr> 
		 <?php foreach ($adresses as $adress):?>    
		<tr>
            <td align=center> <?php echo $adress['id']; ?> </td>
	        <td align=center>  <?php echo $adress['Name']; ?> </td>   
			<td align=center> <?php echo $adress['Adress']; ?> 	</td>  
			<td align=center> <?php echo $adress['Destination']; ?> 	</td> 
       	 <?php endforeach; ?></tr>		
		 </tbody>   </table>
		 <input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'">
</body>
</html>