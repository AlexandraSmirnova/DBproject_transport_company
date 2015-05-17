<?php
if ($flag==1){
	$sql= "SELECT *
	FROM auto  WHERE Id_A=$del";
}
else{
	$sql= "SELECT *
	FROM auto  WHERE Del_flag=0";
}
try
{
 $result= $pdo->query($sql);
}
 catch (PDOException $e)
{
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../output.html.php';
    exit();
}
$nom=0;
while($row=$result->fetch())
{
	$autos[]=array('id'=>$row['Id_A'], 'mark'=>$row['Mark'],  'year'=>$row['Year'], 'capacity'=>$row['Load_capacity'],'valume'=>$row['Valume']);  
	$nom++;
}
?>