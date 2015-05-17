<?php
include '../includes/init_my.php';
$day = $_GET['day']; 
	if(empty($day)){
	$output="Вы не передали день ";
	include '../includes/output.html.php';
	exit();
	}
include '../includes/dbconnect.php';

$sql= "SELECT Id_N, Name, Adress, Destination FROM client c, nacladnaya n
WHERE n.Id_cl=c.Id_cl  AND year(Date_D)=$year AND month(Date_D)=$month AND day(Date_D)=$day AND C.Del_flag=0";
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
$adresses[]=array('id'=>$row['Id_N'], 'Name'=>$row['Name'], 'Adress'=>$row['Adress'], 'Destination'=>$row['Destination']);
}
if (empty($adresses)){
$output ="Ошибка при извлечении данных";
   include '../includes/output.html.php';
   exit();
   }
include 'result4.html.php';
?>
