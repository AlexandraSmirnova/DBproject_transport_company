<?php
include '../includes/dbconnect.php';
if(isset($_GET['Add'])){
	include '../edit/Сlient_E/C_insert.html.php';
	exit();
}
$flag=0;
if(isset($_GET['Info'])){
	include 'inition.php';
	if($error_str){
		include 'delivery.html.php';
		exit();
	}
	include 'D_MainSelect.php';
	include 'A_MainSelect.php';
	include 'Choice_A_D.html.php';
	exit();
}

if(isset($_GET['C_id'])){
	$C_id=$_GET['C_id'];
	include 'delivery.html.php';
	exit();
}

if(isset($_GET['Ch'])){
	include 'inition.php';
	try{
		$sql= 'INSERT INTO nacladnaya SET Id_Cl =:id, Date_D=:date, Weight=:weight, Id_D=:driver, Id_A=:auto, Destination=:adress';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':date', $_POST['date']);
		$s->bindValue(':adress', $adress);
		$s->bindValue(':weight', $_POST['weight']);
		$s->bindValue(':driver', $_POST['radio1']);
		$s->bindValue(':auto', $_POST['radio2']);
		$s->execute();
		include 'procedure.php';
	}
	catch (PDOexception $e){
		$output = 'Ошибка при добавлении перевозки' . $e->getMessage();
		include '../includes/output.html.php';
		exit(1);
	}
	
	$driver=$_POST['radio1'];
	$auto=$_POST['radio2'];
	$flag=1;

	include 'C_MainSelect.php';
	include 'D_MainSelect.php';
	include 'A_MainSelect.php';
	include 'Cost_Select.php';
	include 'Tnn.html.php';
	exit();
}

if (isset($_GET['Delete'])){
	$del=$_POST['del'];
	include 'yesno.html.php';
	exit(4);
}

if(isset($_GET['Agree'])){
	try{
		$sql= 'Update nacladnaya SET Del_flag=1 WHERE Id_N=:del';
		$s = $pdo->prepare($sql);
		$s->bindValue(':del', $_POST['del']);
		$s->execute();
		include 'cancel.html';
		exit(5);
	}
	catch (PDOExeption $e){
		$output= 'Ошибка при попытке отмены записи' . $e->getMessage();
		include '../includes/output.html.php';
		exit();
	}
}

$name = $_GET['firstname'];  
if(empty($name)){
	$output="Вы не передали имя клиента ";
	include '../includes/output.html.php';
	exit();
} 

$flag=0;
include 'C_MainSelect.php';
include 'oldclients.html.php';
?>
