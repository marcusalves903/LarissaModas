<?php 


include 'banco.php';

$id_produto = $_GET['id_produto'];
if ($id_produto != "") {
	$sql = "delete from produto where id_produto = ".$id_produto;
$result = mysqli_query($link,$sql);
if ($result){
			echo '<h1>"Dados excluidos com sucesso!"</h1>';
			echo"<br><a href='formulario.php'>voltar</a> ";
		}
		else{
			echo "Erro de sql";
echo"<br><a href='formulario.php'>voltar</a> ";
		}
}

 ?>