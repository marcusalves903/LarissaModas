<html>
<head>
    <title>Pessoas</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        table{
            border: 1px solid gray;
            padding: 1em
        }
        td{
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 5px
        }
        button{
            padding: 5px
        }
    </style>
</head>
<body>
    <?php 
      

        
        if( isset($_GET['remocao'])){
         
            if( $_GET['remocao'] == "true" ){
                echo "<p>Os dados foram removidos.</p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
      
        if( isset($_GET['alteracao']) ){
           
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }
        } 
    ?>
    <table>
        <caption>Funciánrios</caption>
        <tr><td>Id</td><td>Nome</td><td>Email</td><td>Editar</td><td>Apagar</td></tr>
        <?php 
            
            $conexao = mysqli_connect("localhost","root","","banco");
            if( !$conexao ){
                echo "Ops.. Erro na conexão.";
                exit;
            }
           
            $sql = "SELECT * FROM pessoas";
            $consulta = mysqli_query($conexao, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
           
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['email']. "</td>";
                
              
                echo "<td>";
                echo "<form action='edita.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='text' value='" .$dados['nome']. "'>";
                echo "<input name='email' type='text' value='" .$dados['email']. "'>";    
                echo " <button>Editar</button>";
                echo "</form>";
                echo "</td>";
               
                echo "<td>";
                echo "<form action='remove.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>