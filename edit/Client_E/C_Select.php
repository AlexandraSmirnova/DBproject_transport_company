<?php
if ($flag==1){
	$sql= "SELECT *
	FROM `client` C WHERE Id_cl=$del";
}
else{
	$sql= "SELECT *
	FROM `client` C WHERE Del_flag=0";
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
	$clients[]=array('id'=>$row['Id_cl'], 'name'=>$row['Name'], 'adress'=>$row["Adress"],'phone'=>$row['Fhone']);  
	$nom++;
}
if (empty($clients)){
$output ="Ошибка при извлечении данных. Проверьте правильность запроса";
   include '../../includes/output.html.php';
   exit();
   }
?>