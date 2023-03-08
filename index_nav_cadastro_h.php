<?php
	    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                echo '<li class="nav-item"><a class="nav-link" href="register.php">Registre-se</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="./cadastro/cadastro.php">Cadastro</a></li>';
            }
?>
