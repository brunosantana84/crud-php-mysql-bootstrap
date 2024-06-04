<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `produtos` WHERE id_produto = $id";
$busca = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($busca)){
    $id_produto = $array['id_produto'];
    $numero_produto = $array['numero_produto'];
    $nome_produto = $array['nome_produto'];
    $categoria = $array['categoria'];
    $quantidade = $array['quantidade'];
    $fornecedor = $array['fornecedor'];


    }
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulário Cadastro | Sistema PHP V 1.0</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!--icones-->
        <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
        <!-- Exemplo de CSS -->
        <link href="estilo.css" rel="stylesheet">

    </head>
    <body>
    
    <div class="container" id="tamanhoContainer" > <!-- style="margin-top: 40px;" | Exemplo de CSS inline-->

        <h4>Editar Produto</h4>

    <form id="form" action="_atualizar_produto.php?id=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label>Nº Produto</label>
            <input type="number" class="form-control" name="numero_produto" value="<?php echo $numero_produto; ?>" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="nome_produto" value="<?php echo $nome_produto; ?>" autocomplete="off" required>
        </div>

        <div class=" mb-3">
            <label>Categoria</label>
            <select class="form-select" name="categoria">
                <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
                <option>-------------</option>
                <option value="Periféricos">Periféricos</option>
                <option value="Software">Software</option>
                <option value="Celulares">Celulares</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade; ?>" autocomplete="off" required>
        </div>

        <div class=" mb-3">
            <label>Fornecedor</label>
            <select class="form-select" name="fornecedor">
                <option value="<?php echo $fornecedor; ?>"><?php echo $fornecedor; ?></option>
                <option>-------------</option>
                <option value="Fornecedor A">Fornecedor A</option>
                <option value="Fornecedor B">Fornecedor B</option>
                <option value="Fornecedor C">Fornecedor C</option>
            </select>
        </div>
        
        <div class=" mb-3" id="cadastrarBtn">
            <a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success btn-sm"><i class="fa-regular fa-floppy-disk"></i> Atualizar</button>
        </div>
    </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>