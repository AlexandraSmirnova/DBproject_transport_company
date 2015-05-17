<?php 
session_start();
if (empty($_SESSION['role']))
{
	$output= "Пожалуйста, авторизуйтесь!";
	include '../output.html.php';
	exit();
}
else if($_SESSION['role']!='admin')
{
	$output="У вас недостаточно прав для этого пункта меню";
	include '../output.html.php';
	exit();
}
if(isset($_GET['Add']))
{
	include 'A_insert.html.php';
	exit(0);
}
include '../../includes/dbconnect.php';
if(isset ($_POST['smark']))
{
	try{
		$sql= 'INSERT INTO auto SET Mark =:smark, Year=:syear, Load_capacity=:scapacity, Valume=:svalume';
		$s=$pdo->prepare($sql);
		$s->bindValue(':smark', $_POST['smark']);
		$s->bindValue(':syear', $_POST['syear']);
		$s->bindValue(':scapacity', $_POST['scapacity']);
		$s->bindValue(':svalume', $_POST['svalume']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при добавлении автомобиля' . $e->getMessage();
		include '../output.html.php';
		exit(1);
	}
}
$flag=0;
if(isset($_GET['Edit']))
{
	$flag=1;
	$del=$_POST['id'];
	include 'A_Select.php';
	include 'A_edit.html.php';
	exit(2);
}

if(isset($_GET['Agree']))
{
	try
	{
		$sql= 'Update auto SET Del_flag=1 WHERE Id_A=:id';
		$sql2='Update nacladnaya SET Del_flag=1 WHERE Id_A=:id';
		$s = $pdo->prepare($sql);
		$s1 = $pdo->prepare($sql2);
		$s->bindValue(':id', $_POST['id']);
		$s1->bindValue(':id', $_POST['id']);
		$s->execute();
		$s1->execute();
	}
	catch (PDOExeption $e)
	{
		$output= 'Ошибка при попытке удаления автомобиля' . $e->getMessage();
		include '../output.html.php';
		exit();
	}
}

if (isset ($_POST['emark']))
{
	try{
		$edit=$_POST['id'];
		$sql= 'Update auto SET Mark =:emark, Year=:eyear, Load_capacity=:ecapacity, Valume=:evalume WHERE Id_A=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':emark', $_POST['emark']);
		$s->bindValue(':eyear', $_POST['eyear']);
		$s->bindValue(':ecapacity', $_POST['ecapacity']);
		$s->bindValue(':evalume', $_POST['evalume']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при редактировании автомобиля' . $e->getMessage();
		include '../output.html.php';
		exit(3);
	}
}

if (isset($_GET['Delete']))
 {
		$del=$_POST['id'];
		include '../yesno.html.php';
		exit(4);
}

include 'A_Select.php';
include 'A_form_all.php';
?>