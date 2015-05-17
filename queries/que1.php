<?php

include '../includes/init_my.php';
include '../includes/dbconnect.php';

$sql= "SELECT DISTINCT C.Id_cl id, Name, count(Id_N) Count_trips, sum(weight) Weight, sum(Cost) Cost
FROM `client` C, nacladnaya N
WHERE C.Id_cl=N.Id_cl AND month(Date_D)=$month AND year(Date_D)=$year AND C.Del_flag=0
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
$reports[]=array('id'=>$row['id'], 'name'=>$row['Name'], 'count'=>$row['Count_trips'], 'weight'=>$row['Weight'], 'cost'=>$row['Cost']);
}
if (empty($reports)){
$output ="Ошибка при извлечении данных";
   include '../includes/output.html.php';
   exit();
   }
include 'result1.html.php';
?>