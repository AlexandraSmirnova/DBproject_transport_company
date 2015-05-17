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
	include 'D_insert.html.php';
	exit(0);
}
include '../../includes/dbconnect.php';
if(isset ($_POST['sname']))
{
	try{
		$sql= 'INSERT INTO driver SET Name =:sname,   City=:scity, Date1=:sdate1';
		$s=$pdo->prepare($sql);
		$s->bindValue(':sname', $_POST['sname']);
		$s->bindValue(':scity', $_POST['scity']);
		$s->bindValue(':sdate1', $_POST['sdate1']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при добавлении водителя' . $e->getMessage();
		include '../../includes/output.html.php';
		exit(1);
	}
}
$flag=0;
if(isset($_GET['Edit']))
{
	$flag=1;
	$del=$_POST['id'];
	include 'D_Select.php';
	include 'D_edit.html.php';
	exit(2);
}

if(isset($_GET['Agree']))
{
	try
	{
		echo $del;
		$sql= 'Update driver SET Del_flag=1 WHERE Id_D=:id';
		$sql2='Update nacladnaya SET Del_flag=1 WHERE Id_D=:id';
		$s = $pdo->prepare($sql);
		$s1 = $pdo->prepare($sql2);
		$s->bindValue(':id', $_POST['id']);
		$s1->bindValue(':id', $_POST['id']);
		$s->execute();
		$s1->execute();
	}
	catch (PDOExeption $e)
	{
		$output= 'Ошибка при попытке удаления водителя' . $e->getMessage();
		include '../../includes/output.html.php';
		exit();
	}
}

if (isset ($_POST['ename']))
{
	if(empty($_POST['ename']))
	{
		$output= "Ошибка при попытке передать имя водителя.";
		include '../output.html.php';
		exit();
	}
	try{
		$edit=$_POST['id'];
		$sql= 'Update driver SET Name =:ename,   City=:ecity, Date1=:edate1, Date2=:edate2 WHERE Id_D=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':ename', $_POST['ename']);
		$s->bindValue(':ecity', $_POST['ecity']);
		$s->bindValue(':edate1', $_POST['edate1']);
		$s->bindValue(':edate2', $_POST['edate2']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при редактировании водителя' . $e->getMessage();
		include '../../includes/output.html.php';
		exit(3);
	}
}

if (isset($_GET['Delete']))
   {
		$del=$_POST['id'];
		include '../yesno.html.php';
		exit(4);
}

include 'D_Select.php';
include 'D_form_all.php';
?>