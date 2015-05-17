<?php
if($flag==0){
	$sql= "SELECT * from driver left join (SELECT Id_N, Id_D, Date_D, Done FROM Nacladnaya N WHERE Done=0 and Date_D='$date') deliv using (Id_D) WHERE Done is NULL;";
}
else{
	$sql="SELECT * from driver WHERE Id_D='$driver'";
}
try{
	$result= $pdo->query($sql);
}
 catch (PDOException $e){
    $output = 'Ошибка при извлечении данных  '. $e->getMessage();
	include '../../includes/output.html.php';
    exit();
}

$nom=0;
while($row=$result->fetch()){
	$drivers[]=array('id'=>$row['Id_D'], 'name'=>$row['Name'], 'city'=>$row['City'],'date1'=>$row['Date1'],'date2'=>$row['Date2']);  
	$nom++;
}

if(!$nom){
	$output="К сожалению, в данный момент мы не можем предоставить водителя. 
	Возможно, в ближайшее время кто-нибудь из водителей освободится";
	include '../includes/output.html.php';
    exit();
}
?>