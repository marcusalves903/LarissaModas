<html>
<head>
    <title>Editar</title>
    <style type="text/css">
        input{
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>
    <body>
        <?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
        ?>
        <h2>Alteração de dados</h2>
        <form action="salva.php" method="post">
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="nome" value="<?php echo $nome; ?>">
            <input type="email" name="email" value="<?php echo $email; ?>">
            <input type="submit" value="Salvar alterações">
        </form>
    </body>
</html>