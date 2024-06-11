<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
$busca = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($busca)) {
    $id_categoria = $array['id_categoria'];
    $categoria = $array['categoria'];
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

        <!-- Exemplo de CSS -->
        <link href="estilo.css" rel="stylesheet">

    </head>
    <body>
    
    <div class="container" id="tamanhoContainer" > <!-- style="margin-top: 40px;" | Exemplo de CSS inline-->

        <h4>Editar Categoria</h4>

    <form id="form" action="_atualizar_categoria.php?id=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label>Categoria</label>
            <input type="text" class="form-control" name="categoria" value="<?php echo $categoria; ?>" placeholder="Informe a categoria do produto" autocomplete="off" required>
        </div>

        <div class=" mb-3" id="cadastrarBtn">
            <a href="_listar_categoria.php" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
            
        </div>
    </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>