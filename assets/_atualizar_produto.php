<?php

include 'conexao.php';

$id = $_GET['id'];

$numero_produto = $_POST['numero_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `produtos` SET `numero_produto`= $numero_produto,`nome_produto`='$nome_produto',`categoria`='$categoria',
                      `quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_produto = $id";

$update = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Exemplo de CSS -->
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>

        <div class="container" id="tamanhoContainer">
            <center>
            <h4>Atualizado com sucesso!</h4>

            <div id="cadastrarBtn">
                <a href="_listar_produtos.php" class="btn bt-sm btn-warning">Voltar</a>
            </div>
            </center>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    </body>
</html>