<?php
$sql= "SELECT Cost from nacladnaya WHERE Id_N=(SELECT max(Id_N) from nacladnaya);";

try{
	$result= $pdo->query($sql);
}
 catch (PDOException $e){
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../includes/output.html.php';
    exit();
}

if(empty($result)){
	$output="К сожалению, цену определить не удалось";
	include '../includes/output.html.php';
    exit();
}

while($row=$result->fetch()){
	$cost=$row['Cost'];  
}
?>