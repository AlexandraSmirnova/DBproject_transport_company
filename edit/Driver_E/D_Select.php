<?php
if ($flag==1){
	$sql= "SELECT *
	FROM driver  WHERE Id_D=$del";
}
else{
	$sql= "SELECT *
	FROM driver  WHERE Del_flag=0";
}
try
{
	$result= $pdo->query($sql);
}
 catch (PDOException $e)
{
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../../includes/output.html.php';
    exit();
}
$nom=0;
while($row=$result->fetch())
{
	$drivers[]=array('id'=>$row['Id_D'], 'name'=>$row['Name'], 'city'=>$row['City'],'date1'=>$row['Date1'],'date2'=>$row['Date2']);  
	$nom++;
}
?>