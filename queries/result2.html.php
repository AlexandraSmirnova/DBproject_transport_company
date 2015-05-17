<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Новый отчет</title>
   <link rel="stylesheet" type="text/css" href="http://localhost/project/includes/style.css">
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Отчет о перевозках по водителям</h2>
   <h3 align=center>Месяц -  <?php echo $month;?>, год - <?php echo $year;?>.</h3>
   <p align=center><br>
	<table border=1 class=list align=center>
   <tbody >
          <tr>
            <td align=center> Имя водителя</td>   
			<td align=center>  Колличество поездок	</td>   
			<td align=center>  	Общий перевезенный вес </td>   
			<td align=center>  	Общая стоиммость </td>
       	 </tr> 
		 <?php foreach ($reports as $report):?>    
		<tr>
            <td align=center> <?php echo $report['name']; ?> </td>
	        <td align=center>  <?php echo $report['count']; ?> </td>   
			<td align=center> <?php echo $report['weight']; ?> 	</td>   
			<td align=center>  	<?php echo $report['cost']; ?> </td>  
	
       	 </tr>		<?php endforeach; ?>
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