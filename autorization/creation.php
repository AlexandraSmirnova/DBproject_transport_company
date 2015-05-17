 <?php
try{
	$pdo1=new PDO ('mysql:host=Localhost;dbname=mysql', 'root','');
	echo   "Соединение утановлено";
}
catch (PDOException $e){
   $output = 'Невозможно подключиться к серверу БД   '. $e->getMessage();
	include '../includes/output.html.php';
	exit();
 }
$password=md5(md5('12345'));
$sql="CREATE USER 'director'@'localhost' identified by '$password'";
$sql1="grant SELECT  on client.* to 'director'@'localhost'";
//$sql2="Update user SET Password='$password' where user='registrator'";
$ss=$pdo1->exec($sql);
$sss=$pdo1->exec($sql1);
//$sss=$pdo1->exec($sql2);
$output = 'Скрипт выполнен $password  ';
include '../includes/output.html.php';
exit();
?>