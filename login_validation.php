<?php
session_start();
// Validação de Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as informações de login do formulário
    $nomedeusuario = $_POST["username"];
    $senha = $_POST["password"];

    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "ho6delta";
    $password = "M@NC4T";
    $dbname = "usuarios";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // Verificar se o usuário e senha estão corretos
    $sql = "SELECT * FROM usuarios WHERE nomedeusuario='$nomedeusuario' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Caso estejam corretos, redireciona para a página inicial do site
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        // Caso contrário, exibe uma mensagem de erro
        echo "A senha está incorreta";
        $erro = "Nome de usuário ou senha incorretos";
    }

    mysqli_close($conn);
}
?>
