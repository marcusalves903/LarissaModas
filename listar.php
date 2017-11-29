
<?php 

include 'menu.php';
include 'banco.php';
$results_per_page = 10;
if (isset($_GET["page"])) {
	$page = $_GET["page"];
}
else{
	$page=1;
}

$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM produto LIMIT $start_from, ".$results_per_page;



$result = mysqli_query($link, $sql);
echo "<table border = 1 align = center width=50%>";
	
		echo "<tr>";
		echo "<td>id_produto</td>";
		echo "<td>descricao</td>";
		echo "<td>preco</td>";
		echo "<td></td>";
		echo "<td></td>";
		
		echo "</tr>";
	while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
		echo "<tr>";
		echo "<td>";
		echo $row[0];
		echo "</td>";
		echo "<td>";
		echo $row[1];
		echo "</td>";
		echo "<td>";
		echo $row[2];
		echo "</td>";
		echo "<td>";
		echo "<a href=excluir.php?id_produto=" . $row[0] . "> Excluir </a>";
		echo "</td>";
		echo "<td>";
		echo "<a href=alterar.php?id_produto=" . $row[0] . " &acao=Listar" . "> Alterar </a>";
		echo "</td>";
		echo "</tr>";
	}
echo "<td><a href = 'relatorio.php'> Gerar relatorio</a>";
	echo "</table";

	$sql = "SELECT COUNT(id_produto) AS total FROM produto";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$total_pages = ceil($row["total"] / $results_per_page);

for ($i=1; $i <= $total_pages; $i++) { 
	
	echo "<br><br><a href='listar.php?page=".$i."' ";
	echo ">".$i."</a> ";
}

	mysqli_free_result($result);
	mysqli_close ($link);
	

 ?>