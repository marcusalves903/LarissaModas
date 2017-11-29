<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('banco');
  $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = MD5('$senha')") or die("erro ao selecionar");
  
    
	$query = "SELECT login, senha FROM usuario";
	$result = mysql_query($query);
	
	while ($row = mysql_fetch_assoc($result)) {
		/*echo $row['login'];
		echo "<br>";
		echo $row['senha'];
		echo "<br>";
		*/
		$loginBanco = $row['login'];
		$senhaBanco = $row['senha'];
		/*echo "Login digitado:" , $login;
		echo "Senha digitada:" , $senha;
		*/
		
		
	}
	/*if ( ($login == $loginBanco) {
	header("Location:formulario.php");
	
	
}
/*
if (!$verifica) {
    //die('Invalid query: ' . mysql_error());
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
    
}
else{
	     
    
}
	
	
	

 /*if (isset($entrar) && ($verifica == '0') ) {
            
		
	    
	}else{ 
          
	}
	
	
	
	
	
	*/
		if ($login == $loginBanco && $senha == $senhaBanco) {
	header("Location:formulario.php");
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
			die();
		
	}
		
		
?>