<?php 
    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $novoNome = filter_input(INPUT_POST, 'nome');
    $novoEmail = filter_input(INPUT_POST, 'email');

    //Estabelece a conexão com o mysql
    $conexao = mysqli_connect("localhost","root","","banco");
    if( !$conexao ){
        header("Location:exibe.php?alteracao=false");
        exit;
    }
    //Executa a atualização no banco de dados
    $sql = "UPDATE pessoas SET nome='" . $novoNome . "', email='" . $novoEmail . "' WHERE id=".$id;
    $update = mysqli_query($conexao, $sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        header("Location:exibe.php?alteracao=false");
        exit;
    }

    //se tudo deu certo, redireciona pra exibe.php com alteracao igual a true
    header("Location:exibe.php?alteracao=true");
?>