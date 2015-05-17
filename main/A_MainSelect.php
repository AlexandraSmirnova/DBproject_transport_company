<?php
if ($flag==0){
	$sql= "SELECT * from auto WHERE Load_capacity >$weight;";
}
else{
	$sql= "SELECT * from auto WHERE Id_A='$auto'";
}

try{
 $result= $pdo->query($sql);
}
 catch (PDOException $e){
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../output.html.php';
    exit();
}

$nom=0;
while($row=$result->fetch()){
	$autos[]=array('id'=>$row['Id_A'], 'mark'=>$row['Mark'],  'year'=>$row['Year'],
		'capacity'=>$row['Load_capacity'],'valume'=>$row['Valume']); 
	$nom++;
}

if(!$nom){
	$output="К сожалению, в данный момент мы не можем предоставить подходящий автомобиль. 
	Возможно, для перевозки меньшего груза у нас найдется подходящий вариант";
	include '../includes/output.html.php';
    exit();
}
?>