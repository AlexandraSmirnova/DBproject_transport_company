<?php
try{
	$pdo=new PDO('mysql:host=localhost; dbname=client', 'root','' );
}
catch (Exception $e)
{
	$output="Невозможно установить связь с Базой данных";
	include '../includes/output.html.php';
exit();
}

include '../autorization/select_Role.php';

try{
	$pdo=new PDO('mysql:host=Localhost;dbname=mysql', 'root','');
}
catch (Exception $e)
{
	$output=" Ошибка при попытке установить связь с Базой данных ";
	include '../includes/output.html.php';
	exit();
}

include '../autorization/select_User.php';
//echo $login;
//echo $scrambled;
$_SESSION['role']=$login;
//echo $scrambled;
try{
	$pdo=new PDO('mysql:host=localhost; dbname=client', $login, $scrambled);
}
catch (Exception $e)
{
	$error=3;
	$output="Невозможно установить связь с Базой данных от имени пользователя";
	include '../includes/output.html.php';
	exit();
}
/*
try{
$sql='UPDATE roles SET  Password=:password WHERE Login=:login';
$s=$pdo->prepare($sql);
$password=md5('54321');
$s->bindValue(':login', 'kolya');
$s->bindValue(':password', $password);
//$s->bindValue(':role', 'admin');
$s->execute();
}
catch (Exception $e)
{
$output="Ошибка";
include '../includes/output.html.php';
exit();
}
*/
?>
