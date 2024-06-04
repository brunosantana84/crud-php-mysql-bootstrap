<?php

include 'conexao.php';

$numero_produto = $_POST['numero_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `produtos`(`numero_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) 
VALUES ($numero_produto,'$nome_produto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 500px; margin-top: 20px;">

<div class="alert alert-success alert-dismissible fade show" role="alert">
  Produto adicionado com sucesso!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div id="cadastrarBtn">
<a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>
<a href="../index.php" role="button" class="btn btn-sm btn-success">Cadastrar novo item</a>
</div>

</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Exemplo de CSS -->
<link href="estilo.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>