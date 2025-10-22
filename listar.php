<?php 

include('conexao.php');
$select = 'SELECT * FROM produtos';
$resultado = $conexao -> query($select);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Início</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listar.php">Listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ped.php">Seus Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroprodu.php">Cadastrar Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <h1>Lista de Produtos</h1>
    <table class="table table-striped" border="1">
        <thead>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Preço</th>
            <th>Descrição</th>
        </thead>
        <tbody>
            <?php 
            include 'conexao.php';
                if ($resultado->num_rows > 0) {
                     while($produto = $resultado->fetch_object()) {
                        echo "<tr>
                            <td>$produto->nome</td>
                            <td>$produto->tipo</td>
                            <td>$produto->preco</td>
                            <td>$produto->descricao</td>
                            
                            <td>
                            <a href='delete.php?id_produto=$produtos->id_produto'>Excluir</a>
                            </td>
                        </tr>";
                     }
                } else {
                    echo "<tr>
                    <td>Nenhum agendamento cadastrado</td>
                    </tr>";
                }  
            ?>
        </tbody>
    </table>
        <a href="index.html">
            <button type="submit" class="btn btn-danger">Voltar</button>
        </a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>