<?php
	//session_start();
//include 'dbconnect_for_enter.php';
//include 'creation.php';
if ( isset($_REQUEST['ex'])){
	session_start();
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset ($_SESSION['role']);
	unset($_SESSION['visits']);
	exit();
 } 
 // Контроллер выводит форму ввода логина и пароля.
if (!isset($_POST['act'])){
	include 'login.html.php';
	exit();
 }
 // В форме ввода логина и пароля нажата кнопка выхода из системы.
if (isset($_POST['exit'])){
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['password']);
	unset($_SESSION['visits']);
	unset ($_SESSION['role']);
	include '../menu.html.php';
    exit();
} 
else{
	session_start(); 
	$login=$_POST['login'];
	$password = $_POST['password'];  
	$_SESSION['login'] = $login;
	$scrambled = md5($password); 
	$_SESSION['password']=$scrambled;
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits']=0;
	}
	$_SESSION['visits']++;
	include 'dbconnect_for_enter.php';
	include '../menu.html.php';
 }
?>
