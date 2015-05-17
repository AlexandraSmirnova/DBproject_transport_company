<?php
	$month = $_GET['month']; 
	if (empty($month)){
	$output="Вы не выбрали месяц";
	include '../includes/output.html.php';
	exit();
	}
	$year = $_GET['year']; 
	if(empty($year)){
	$output="Вы не передали год ";
	include 'output.html.php';
	exit();
	}
?>