<?php
$sql= "SELECT max(Id_N) from nacladnaya";

try{
 $result=$pdo->query($sql);;
}
 catch (PDOException $e){
    $output = 'Ошибка при определении номера накладной  '. $e->getMessage();
	include '../includes/output.html.php';
    exit();
}
while($row=$result->fetch()){
	$max=$row['max(Id_N)'];	
}

$sql2="Call profit($max)";
$result=$pdo->query($sql2);
?>