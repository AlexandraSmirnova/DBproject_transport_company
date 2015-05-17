  <?php
  if($error>0){
   session_start();
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset ($_SESSION['role']);
	unset($_SESSION['visits']);
	}
   ?>
<html>
 <head> 
 <meta charset="utf-8">
  <title> Ошибка! </title>
  </head>
   <body bgcolor="#000006" text="FF8C00" vlink="FF8C00" link="00FF00" background="../dm8v.jpg">
   <br><br><br>
   <div align=center>
   <table width=50% align=center>
		<td align=center><h3><?php echo $output;?></h3></td>
   </table>
   <input type="button" value="Вернуться на главную" onclick="location.href='../menu.html.php'">
 
   </body>
  </html>