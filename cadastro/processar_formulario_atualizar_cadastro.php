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
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];

$sql = "UPDATE cadastro SET nome='$nome', endereco='$endereco', numero='$numero', complemento='$complemento', cep='$cep', cidade='$cidade', estado='$estado', email='$email', whatsapp='$whatsapp' WHERE id=$id";

if ($conn->query($sql) == TRUE) {
    echo "Dados do formulário atualizados com sucesso no banco de dados";
} else {
    echo "Erro ao atualizar os dados do formulário no banco de dados: " . $conn->error;
}

$conn->close();
?>

