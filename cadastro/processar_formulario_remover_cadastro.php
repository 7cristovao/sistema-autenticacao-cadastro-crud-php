<?php
$servername = "localhost";
$username = "seu_nome_de_usuario_do_banco_de_dados";
$password = "sua_senha_do_banco_de_dados";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM cadastro WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    echo "Registro apagado com sucesso do banco de dados";
} else {
    echo "Erro ao apagar o registro do banco de dados: " . $conn->error;
}

$conn->close();
?>

