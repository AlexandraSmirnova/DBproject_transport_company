<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="refresh" content="600">
	<title> Подтверждение удаления </title>        
</head>
<body bgcolor="#000006" text="#FFFFFF" vlink="FF8C00" link="00FF00" background="../../dm8v.jpg">
	<br><br><br>
	<h2 align=center>Вы действительно хотите удалить эту запись?</h2>
	
		<table align=center border=0 width=50% >
			<tr>
					<td align=center><form action=" ?Agree" method="Post">
									<input type="hidden" name="id" value=<?php echo $del; ?>>
									<input type="submit" value="Да"></form></td>
					<td align=center><form action=" ?" method="Post">
							<input type="submit" value="Нет"></td>
			</tr>
		</table>
</body> 
</html>