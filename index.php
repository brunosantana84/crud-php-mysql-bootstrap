<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD PHP | Sistema PHP V 1.0</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Exemplo de CSS -->
    <link href="assets/estilo.css" rel="stylesheet">

    <!--icones-->
    <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container" style="margin-top: 100px;">

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Categoria Produto</h5>
                  <p class="card-text">Opção para adicionar, visualizar, editar e excluir categorias.</p>
                  <a href="assets/_adicionar_categoria.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar</a>
                  <a href="assets/_listar_categoria.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i> Opções</a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Fornecedores</h5>
                  <p class="card-text">Opção para cadastrar fornecedores.</p>
                  <a href="assets/_adicionar_fornecedor.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar</a>
                  <a href="assets/_listar_fornecedor.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i> Opções</a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="container" style="margin-top: 30px;">

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Produtos</h5>
                  <p class="card-text">Opção para adicionar, visualizar, editar e excluir produtos.</p>
                  <a href="assets/_adicionar_produtos.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar</a>
                  <a href="assets/_listar_produtos.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i> Opções</a>
                </div>
              </div>
            </div>
            
<!-- PRÓXIMA VERSÃO (Login e níveis de acesso) V1.2

            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Usuários</h5>
                  <p class="card-text">Opção para visualizar, editar e excluir usuários.</p>
                  <a href="assets/_adicionar_usuario.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar</a>
                  <a href="assets/_listar_usuario.php" class="btn btn-warning"><i class="fa-solid fa-gear"></i> Opções</a>
                </div>
              </div>
            </div>
          </div>

-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>