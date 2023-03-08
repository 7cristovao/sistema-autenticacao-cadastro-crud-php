<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css">
</head>
<body>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(atual)</span></a>
             <?php
             
             include 'login_register_nav_h.php'; 
	     ?>
          </li>
        </ul>
     </div>
    </nav>

   <div class="login">
        <h2>Login</h2>
        <form action="login_validation.php" method="post">
            <label>Nome do usuário:</label>
            <input type="text" name="username" required>
            <label>Senha:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
