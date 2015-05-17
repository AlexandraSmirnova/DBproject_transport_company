<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600"> 
  <title>Новый отчет</title>
   <link rel="stylesheet" type="text/css" href="http://localhost/project/includes/style.css">
 </head>
 <body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
   <br><br><br>
   <h2 align=center>Средний вес товаров перевезенных <?php echo $year;?> году</h2>
   <p align=center><br>
	<table border=1 width=50% align=center bgcolor="333333">
   <tbody >
          <tr>  
			<td align=center>  Месяц	</td>   
			<td align=center>  	Средний вес </td>   
       	 </tr> 
		 <?php foreach ($reports as $report):?>    
		<tr>
	        <td align=center>  <?php echo $report['month']; ?> </td>   
			<td align=center> <?php echo $report['weight']; ?> 	</td>     
	
       	 </tr>		<?php endforeach; ?>
		 </tbody>   </table>
		 <table border=0 width=50% align=center>
		  <tbody >
		 <tr>  
			<td align=left> <input type="button" value="Вернуться в меню запросов" onclick="location.href='menu_Q.html.php'">	</td>   
			<td align=right>  	<input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'"></td>   
       	 </tr> 
		 </tbody>   </table>
    </body>
  </html>