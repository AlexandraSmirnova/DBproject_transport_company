<?php

include '../includes/init_my.php';
include '../includes/dbconnect.php';

$sql= "SELECT DISTINCT Name, count(Id_N) Count_trips, sum(weight) Weight, sum(Cost) Cost
FROM `driver` D, nacladnaya N
WHERE D.Id_D=N.Id_D AND month(Date_D)=$month AND year(Date_D)=$year AND D.Del_flag=0
Group by Name;";

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
$reports[]=array('name'=>$row['Name'], 'count'=>$row['Count_trips'], 'weight'=>$row['Weight'], 'cost'=>$row['Cost']);
}
if (empty($reports)){
$output ="Ошибка при извлечении данных";
   include '../includes/output.html.php';
   exit();
   }
include 'result2.html.php';
?>