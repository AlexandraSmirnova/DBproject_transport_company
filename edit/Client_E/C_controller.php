<?php 
session_start();
if (empty($_SESSION['role']))
{
	echo "Пожалуйста, авторизуйтесь!";
	include '../../autorization/User_control.php';
	exit();
}
else if($_SESSION['role']!='registrator' and $_SESSION['role']!='admin')
{
	$output="У вас недостаточно прав для этого пункта меню";
	include '../output.html.php';
	exit();
}
if(isset($_GET['Add']))
{
	$Add=$_GET['Add'];
	include 'C_insert.html.php';
	exit(0);
}
include '../../includes/dbconnect.php';
if(isset ($_POST['sname']))
{
	if(empty($_POST['sname']))
	{
		$output= "Ошибка при попытке передать имя клиента.";
		include '../output.html.php';
		exit();
	}
	if(strlen((string)$_POST['sphone'])!=10 && $_POST['sphone']==0)
		{
			$output= "Ошибка при попытке передать телефон клиента.";
			$output2="Телефон должен содержать 10 цифр"; 
			include '../output.html.php';
			exit();
		}
	try{
		$sql= 'INSERT INTO client SET Name =:sname,   Adress=:sadress, Fhone=:sphone';
		$s=$pdo->prepare($sql);
		$s->bindValue(':sname', $_POST['sname']);
		$s->bindValue(':sadress', $_POST['sadress']);
		$s->bindValue(':sphone', $_POST['sphone']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при добавлении клиента' . $e->getMessage();
		include '../output.html.php';
		exit(1);
	}
}
if (isset($_GET['goto'])){
	include '../../main/clients.php';
}
$flag=0;
if(isset($_GET['Edit']))
{
	$flag=1;
	$del=$_POST['id'];
	include 'C_Select.php';
	include 'C_edit.html.php';
	exit(2);
}

if(isset($_GET['Agree']))
{
	try
	{
		echo $del;
		$sql= 'Update client SET Del_flag=1 WHERE Id_Cl=:id';
		$sql2='Update nacladnaya SET Del_flag=1 WHERE Id_Cl=:id';
		$s = $pdo->prepare($sql);
		$s1 = $pdo->prepare($sql2);
		$s->bindValue(':id', $_POST['id']);
		$s1->bindValue(':id', $_POST['id']);
		$s->execute();
		$s1->execute();
	}
	catch (PDOExeption $e)
	{
		$output= 'Ошибка при попытке удаления клиента' . $e->getMessage();
		include '../output.html.php';
		exit();
	}
}

if (isset ($_POST['ename']))
{
	if(empty($_POST['ename']))
	{
		$output= "Ошибка при попытке передать имя клиента.";
		include '../output.html.php';
		exit();
	}
	if(strlen((string)$_POST['ephone'])!=10 && $_POST['ephone']==0)
		{
			$output= "Ошибка при попытке передать телефон клиента.";
			$output2="Телефон должен содержать 10 цифр"; 
			include '../output.html.php';
			exit();
		}
	try
	{
		$edit=$_POST['id'];
		$sql= 'Update client SET Name =:ename,   Adress=:eadress, Fhone=:ephone WHERE Id_cl=:id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':ename', $_POST['ename']);
		$s->bindValue(':eadress', $_POST['eadress']);
		$s->bindValue(':ephone', $_POST['ephone']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$output = 'Ошибка при редактировании клиента' . $e->getMessage();
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

include 'C_Select.php';
include 'C_form_all.php';
?>