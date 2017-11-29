<!DOCTYPE html>

<meta charset="UTF-8">
<html>
	<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE-edge">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<title>CRUD</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<?
	include 'banco.php';
	
	?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
	<meta name="copyright" content="ninodezign.com"> 
	<title>Larissa Modas| Loja Virtual</title>
	

    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />
	</head>
	
	

	<body data-target="#nino-navbar" data-spy="scroll">


	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

				
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#nino-header">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="#nino-story">Estoque</a></li>
								<li><a href="#nino-services">Calendário</a></li>
								<li><a href="#nino-portfolio">Contato</a></li>
								<li><a href="#nino-latestBlog">Cadastro</a></li>
							</ul>
						</div>
						<ul class="nino-iconsGroup nav navbar-nav">
							
							<li><a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>
						</ul>
					</div>
				</div>
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">
				
				
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
								
							Larissa Modas<br><h3>A loja que te deixa na moda pelo menor preço</h3>
						</h2>
						
					</div>	
				</div>

			</section>
		</div>
	</header>
	<section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				
				ESTOQUE DE MERCADORIAS
			</h2>
			<p class="nino-sectionDesc"> <body>
	<div class="col-md-8 col-md-offset-2">
	<h1>Inserir Produto</h1>
	<form method = "GET" action = "incluir.php">
		<div class="form-group">
			<label>Código: </label>
			<input type = "text" name = "id_produto" class = "form-control" placeholder = "Escreva o codigo do Produto"><br/>
		</div>
		<div class="form-group">
			<label>Descrição: </label>
			<input type = "text" name = "descricao" class = "form-control" placeholder = "Escreva a descrição do produto"><br/>
		</div>
		<div class="form-group">
			<label>Preço: </label>
			<input type = "text" name = "preco" class = "form-control" placeholder = "Escreva o preço do produto"><br/>
		</div>
		<div class="form-group">
			<label>Quantidade: </label>
			<input type = "text" name = "quantidade" class = "form-control" placeholder = "Escreva a quantidade do produto"><br/>
		</div>
	   <div class="form-group">
			<input type = "submit" name = "Inserir" class = "btn btn-warning" value = "Inserir dados"><br/>
		</div>
	</form>
	</div>
	
	
		
		</div>		
	</section>
    <section id="nino-counting">
    	<div class="container">
    		<div layout="row" class="verticalStretch">
    			<div class="item">
    				<div class="number">42</div>
    				<div class="text">Web Design Projects</div>
    			</div>
    			<div class="item">
    				<div class="number">123</div>
    				<div class="text">happy client</div>
    			</div>
    			<div class="item">
    				<div class="number">15</div>
    				<div class="text">award winner</div>
    			</div>
    			<div class="item">
    				<div class="number">99</div>
    				<div class="text">cup of coffee</div>
    			</div>
    			<div class="item">
    				<div class="number">24</div>
    				<div class="text">members</div>
    			</div>
    		</div>
    	</div>
    </section>
	<?php 


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
		echo "<td>Id_produto</td>";
		echo "<td>Descricao</td>";
		echo "<td>Preco</td>";
		echo "<td>Quantidade</td>";
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
		echo $row[3];
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
	
	echo "<br><br><a href='formulario.php?page=".$i."' ";
	echo "> Paginas:".$i."</a> ";
}

	mysqli_free_result($result);
	mysqli_close ($link);
	

 ?>
    <section id="nino-services">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Calendário</span>
				CARGA HORÁRIA
			</h2>
			
	
	 </td>
	</tr>
  </table>
  </form>
			</h2>



    	</div>
    </section>
    <section id="nino-map">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
    			<i class="mdi mdi-map-marker nino-icon"></i>
    			<span class="text">Open map</span>
    			<span class="text" style="display: none;">Close map</span>
    		</h2>
    		<div class="mapWrap">
	    		<iframe src="https://www.google.com/maps/place/R.+Jo%C3%A3o+Sarmento,+1098+-+Centro,+Os%C3%B3rio+-+RS,+95520-000/@-29.8925126,-50.2623287,18z/data=!4m19!1m13!4m12!1m3!2m2!1d-50.2620034!2d-29.8921296!1m6!1m2!1s0x951865fee265d7f9:0x452c8433ebaa0b66!2sR.+Jo%C3%A3o+Sarmento,+1098+-+Centro,+Os%C3%B3rio+-+RS,+95520-000,+Brasil!2m2!1d-50.2620206!2d-29.8921682!3e0!3m4!1s0x951865fee265d7f9:0x452c8433ebaa0b66!8m2!3d-29.8921682!4d-50.2620206?hl=pt-BR" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	</div>
    	</div>
    </section>

   
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form>
	

	<a href="#" id="nino-scrollToTop">Go to Top</a>
	

	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>


		
</body>


	
</html>