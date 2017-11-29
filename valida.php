<?php
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sql = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
if($row > 0){
	session_start();
	$_SESSION['usuario']= $_POST['usuario'];
	$_SESSION['senha']= $_POST['senha'];
	
	
}
?>