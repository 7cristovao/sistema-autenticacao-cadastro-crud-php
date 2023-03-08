<?php
// Validação de Registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "seu_nome_de_usuario_do_banco_de_dados";
    $password = "sua_senha_do_banco_de_dados";
    $dbname = "usuarios";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // Coletar informações do formulario
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verificar se o nome do usuário já existe
    $sql = "SELECT id FROM usuarios WHERE nomedeusuario='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Este nome de usuário já está em uso.";
    } else {
        // Inserir informações do usuário no banco de dados
        $sql = "INSERT INTO usuarios (nomedeusuario, email, senha) VALUES ('$username', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registro concluído com sucesso.";
        } else {
            echo "Erro ao registrar: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
