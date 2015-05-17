<?php
if ($flag==0){
	$sql="SELECT * FROM `client` c where Name='$name'";
}
else {
	$sql="SELECT * FROM `client` c where Id_cl='$id'";
}

try {
	$result=$pdo->query($sql);
}
catch(Exception $e){
	$output="Неверный запрос". $e->getMessage();
	include '../includes/output.html.php';
    exit();
}

$nom=0;
while($row=$result->fetch()){
	$clients[]=array('id'=>$row['Id_cl'], 'name'=>$row['Name'], 'adress'=>$row['Adress'], 'phone'=>$row['Fhone'], 'weight'=>$row['General_weight']);	
	$nom++;
}

if(!$nom){
	$output="Клиента с таким именем не существует";
	include '../includes/output.html.php';
    exit();
}
?>