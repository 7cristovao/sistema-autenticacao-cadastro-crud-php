<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(atual)</span></a>
             <?php
             
                 include 'cadastro_nav_login_register_logout_h.php';
             ?>
          </li>
        </ul>
     </div>
    </nav>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
             <?php
                 include 'cadastro_nav_h.php';
             ?>
          </li>
        </ul>
     </div>
    </nav>

<h1>Tela de cadastro</h1>
<p class="container"><a href="adicionar_cadastro.php"><input class="botao" type="button" value="Adicionar Cadastro" /></a></p>
<p class="container"><a href="buscar_cadastro.php"><input class="botao" type="button" value="Buscar Cadastro" /></p>
<p class="container"><a href="atualizar_cadastro.php"><input class="botao" type="button" value="Atualizar Cadastro" /></p>
<p class="container"><a href="remover_cadastro.php"><input class="botao" type="button" value="Remover Cadastro" /></p>
</body>
</html>
