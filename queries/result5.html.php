<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
   <link rel="stylesheet" type="text/css" href="http://localhost/project/includes/style.css">
  <title>Новый отчет</title>
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Общая стоимость перевозок на <?php echo "$mname $year";?>года </h2>
   <p align=center><br>
	<table border=1 align=center class=list>
   <tbody >
          <tr>
			<td align=center>  Номер	</td> 
			<td align=center>  Имя водителя</td>
			<td align=center>  Общая стоимость перевозок </td>  
       	 </tr> 
		 <?php $cost=0; foreach ($reports as $report):?>    
		<tr>
            <td align=center> <?php echo $report['id']; ?> </td>
	        <td align=center>  <?php echo $report['name']; ?> </td>   
			<td align=center> <?php echo $report['cost'];?> 	</td>  
			<?php $cost+=$report['cost']; ?>
       	 </tr>		<?php endforeach; ?>
		 </tbody>   </table>
		 <?php echo "Общая прибыль за месяц: $cost p.";?>
		 </tbody>   </table>
				  <table border=0 width=80% align=center>
		  <tbody >
		 <tr>  
			<td align=left> <input type="button" value="Вернуться в меню запросов" onclick="location.href='menu_Q.html.php'">	</td>   
			<td align=right>  	<input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'"></td>   
       	 </tr> 
		 </tbody>   </table>
    </body>
  </html>