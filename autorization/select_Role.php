<?php
$sql= "SELECT Role, Password_role from roles WHERE Login='$login' and Password='$scrambled';";

try{
	$result= $pdo->query($sql);
}
 catch (PDOException $e){
	$error=2;
	$output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../includes/output.html.php';
    exit();
}

if(empty($result)){
	$output="Неправильный логин или пароль";
	$error=1;
	include '../includes/output.html.php';
    exit();
}

while($row=$result->fetch()){
	$login=$row['Role'];  
	$scrambled=$row['Password_role'];
	$_SESSION['role']=$login;
}
?>