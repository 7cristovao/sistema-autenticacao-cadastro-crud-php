<?php
// Configuração de acesso ao banco de dados
$servername = "localhost"; // Endereço do servidor
$username = "seu_nome_de_usuario_do_banco_de_dados"; // Nome do usuário do banco de dados
$password = "sua_senha_do_banco_de_dados"; // Senha do usuário do banco de dados
$dbname = "cadastro"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe o nome de busca do usuário
if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
} else {
    $nome = "";
}

// Prepara a query SQL
$sql = "SELECT * FROM cadastro WHERE nome LIKE '%$nome%'";

// Executa a query e armazena o resultado
$result = $conn->query($sql);

// Verifica se a query retornou resultados
if ($result->num_rows > 0) {
    // Itera pelos resultados e exibe na tela
    while($row = $result->fetch_assoc()) {
        echo "Código: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>Endereço: " . $row["endereco"] . "<br>Número: " . $row["numero"] . "<br>Complemento: " . $row["complemento"] . "<br>CEP: " . $row["cep"] . "<br>Cidade: " . $row["cidade"] . "<br>Estado: " . $row["estado"] . "<br>E-mail: " . $row["email"] . "<br>Whatsapp: " . $row["whatsapp"] . "</p>";
    }
} else {
    echo "Não foram encontrados resultados para a busca.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

