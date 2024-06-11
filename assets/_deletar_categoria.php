<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$deletar = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de Produtos | Sistema PHP V 1.0</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--icones-->
    <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
    <!-- Exemplo de CSS -->
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    
    <div class="container" id="">

        <h3>Lista de Produtos</h3>
        <div id="cadastrarBtn">
        <a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Categoria excluída com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Categoria</th>

              </tr>
            </thead>
            <tbody>
              <tr>

                <?php
                
                    $sql = "SELECT * FROM `categoria`";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)) {
                      $id_categoria = $array['id_categoria'];
                      $categoria  = $array['categoria'];
                ?>
            
                <td><?php echo $categoria; ?></td>

                <td>
                    <a href="_editar_categoria.php?id=<?php echo $id_categoria; ?>" role="button" class="btn btn-warning btn-sm" role="button"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                    <a href="_deletar_categoria.php?id=<?php echo $id_categoria; ?>" role="button" class="btn btn-danger btn-sm" role="button"><i class="fa-solid fa-trash"></i> Deletar</a>
                </td>

                
              
            </tr>
            <?php } ?>
            </tbody>
          </table>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>