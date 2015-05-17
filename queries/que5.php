<?php
include '../includes/dbconnect.php';
include '../includes/init_my.php';

$sql= "SELECT MONTHNAME($month) mname, n.Id_D id,  Name, sum(Cost) Profit FROM driver d, nacladnaya n
WHERE n.Id_D=d.Id_D  AND year(Date_D)=$year AND month(Date_D)=$month AND D.Del_flag=0
Group by d.Id_D;";

try
{
 $result= $pdo->query($sql);
}
 catch (PDOException $e)
{
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '..includes/output.html.php';
    exit();
}

while($row=$result->fetch())
{
$reports[]=array('id'=>$row['id'], 'name'=>$row['Name'], 'cost'=>$row['Profit']);
}
if (empty($reports)){
$output ="Ошибка при извлечении данных";
   include '../includes/output.html.php';
   exit();
   }
include '../includes/monthname.php';
include 'result5.html.php';
?>