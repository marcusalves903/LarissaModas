<?php 


include 'banco.php';
if (isset($_GET['id_produto']) == false) {
	
}
else{
		$id_produto = $_GET['id_produto'];
		$descricao = $_GET['descricao'];
		$preco = $_GET['preco'];
		$quantidade = $_GET['quantidade'];
		$sql = "INSERT INTO produto (id_produto,descricao,preco,quantidade) VALUES ('". $id_produto."','" . $descricao . "','" . $preco . "','" . $quantidade . "')";
		$result = mysqli_query($link,$sql);
		if ($result){
			echo '<h1>"Dados inseridos com sucesso!"</h1>';
			echo"<br><a href='formulario.php'>voltar</a> ";
		}
		else{
			echo "Erro de sql";
echo"<br><a href='formulario.php'>voltar</a> ";
		}
}


 ?>