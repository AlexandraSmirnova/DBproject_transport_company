<?php
$sql= "SELECT User, Password from user WHERE User='$login';";

try
{
	$result1= $pdo->query($sql);
}
 catch (PDOException $e)
{
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../includes/output.html.php';
    exit();
}

if(empty($result1))
{
	$output="Ошибка при авторизации";
	include '../includes/output.html.php';
    exit();
}

while($row=$result1->fetch())
{
	$login=$row['User']; 
	//$scrambled=$row['Password'];  
}
?>