<?php

include '../includes/dbconnect.php';
$year = $_GET['year']; 
	if(empty($year)){
	$output="Вы не передали год ";
	include '../includes/output.html.php';
	exit();
	}
	
$sql= "SELECT month(Date_D) N, Monthname(Date_D) month, Avg(weight) weight FROM Nacladnaya N
WHERE year(Date_D)=$year  AND Del_flag=0 group by month(Date_D) ";

try
{
 $result= $pdo->query($sql);
}
 catch (PDOException $e)
{
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../includes/output.html.php';
    exit();
}

while($row=$result->fetch())
{
$reports[]=array('id'=>$row['N'], 'month'=>$row['month'], 'weight'=>$row['weight']);
}
if (empty($reports)){
$output ="Ошибка при извлечении данных";
   include '../includes/output.html.php';
   exit();
   }
include 'result3.html.php';
?>