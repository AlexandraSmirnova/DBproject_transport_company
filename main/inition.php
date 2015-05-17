<?php
$id=$_POST['id'];
$date=$_POST['date'];
$adress=$_POST['adress'];
$weight=$_POST['weight'];
if(empty($date)){
	$error_str="Вы не указали дату";
}
if(preg_match("|([0-9]{4})-([0-1][0-9])-([0-3][0-9])|i", $date, $regs) && checkdate($regs[2], $regs[3], $regs[1])){
}
else{
	$error_str="Неверный формат даты";
}
if(empty($adress)){
	$error_str="Вы не указали адрес";
}
if(empty($weight)){
	$error_str="Вы не указали вес";
}
$C_id=$id;
?>