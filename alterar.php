<?php 


include 'banco.php';

if (isset($_GET['id_produto']) == true) {
	echo "<form action = 'alterar.php' method='GET'>";
	$sql = "select * from produto where id_produto = ". "'" . $_GET['id_produto'] . "'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_NUM);
	echo "Codigo".$row[0]."<br>"."<input type='hidden' name='id' value=".$row[0]."><br>";
	echo "descrição: <input type='Text' name='descricao' value='".$row[1]."'>";
		echo "preco : <input type='Text' name='preco' value='".$row[2]."'>";
		echo "quantidade : <input type='Text' name='quantidade' value='".$row[3]."'>";
			
	echo "<input type='submit' value='Salvar'>";
	echo "</form>";
} else{
$codigoJaCadastrado = $_GET['id'];
$descricao = $_GET['descricao'];
$quantidade = $_GET['quantidade'];
$sql = "update produto set descricao = "."'".$descricao."'where id_produto = ". "'". $codigoJaCadastrado."'";
$result=mysqli_query($link,$sql);
if ($result){
			echo '<h1>"Dados alterados com sucesso!"</h1>';
			echo"<br><a href='formulario.php'>voltar</a> ";
		}
		else{
			echo "Erro de sql";
echo"<br><a href='formulario.php'>voltar</a> ";
		}
}

 ?>
