<?php
try{
	$pdo=new PDO('mysql:host=localhost; dbname=client', 'root','' );
}
catch (Exception $e)
{
	$output="Невозможно установить связь с Базой данных";
	include '../includes/output.html.php';
	exit();
}
?>
