<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de Produtos | Sistema PHP V 1.0</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Exemplo de CSS -->
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    
    <div class="container" id="">
        <h3>Lista de Produtos</h3>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nº Produto</th>
                <th scope="col">Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <?php
                
                    $sql = "SELECT * FROM `produtos`";
                    $busca = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($busca)) {

                      $numero_produto  = $array['numero_produto'];
                      $nome_produto = $array['nome_produto']; 
                      $categoria = $array['categoria'];
                      $quantidade = $array['quantidade'];
                      $fornecedor = $array['fornecedor'];

                ?>
            
                <td><?php echo $numero_produto; ?></td>
                <td><?php echo $nome_produto; ?></td>
                <td><?php echo $categoria; ?></td>
                <td><?php echo $quantidade; ?></td>
                <td><?php echo $fornecedor; ?></td>

                
              
            </tr>
            <?php } ?>
            </tbody>
          </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>