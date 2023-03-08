<?php
// Define a variável $registro inicialmente como um array vazio
$registro = [];

// Verifica se o formulário foi enviado
if (isset($_POST['id'])) {
  // Conecta ao banco de dados
  $conexao = mysqli_connect("localhost", "ho6delta", "M@NC4T", "cadastro");

  // Verifica se a conexão foi bem sucedida
  if (!$conexao) {
    die("Falha ao conectar ao banco de dados: " . mysqli_connect_error());
  }

  // Obtém o ID do registro a ser editado
  $id = mysqli_real_escape_string($conexao, $_POST['id']);

  // Executa a consulta SQL para buscar as informações do registro
  $consulta = "SELECT * FROM cadastro WHERE id = $id";
  $resultado = mysqli_query($conexao, $consulta);

  // Verifica se a consulta foi bem sucedida
  if (!$resultado) {
    die("Falha ao buscar informações no banco de dados: " . mysqli_error($conexao));
  }

  // Obtém as informações do registro
  $registro = mysqli_fetch_assoc($resultado);

  // Fecha a conexão com o banco de dados
  mysqli_close($conexao);
}
?>
<!-- Formulário para buscar informações -->
<form method="post">
  <label>ID:</label>
  <input type="text" name="id" required>
  <input type="submit" value="Buscar">
</form>
<!-- Formulário para editar informações -->
<form method="post" action="processar_formulario_remover_cadastro.php">
  <label>Nome:</label>
  <input type="text" name="nome" value="<?php echo isset($registro['nome']) ? $registro['nome'] : ''; ?>">
  <label>Endereço:</label>
  <input type="text" name="endereco" value="<?php echo isset($registro['endereco']) ? $registro['endereco'] : ''; ?>">
  <label>Número:</label>
  <input type="text" name="numero" value="<?php echo isset($registro['numero']) ? $registro['numero'] : ''; ?>">
  <label>Complemento:</label>
  <input type="text" name="complemento" value="<?php echo isset($registro['complemento']) ? $registro['complemento'] : ''; ?>">
  <label>CEP:</label>
  <input type="text" name="cep" value="<?php echo isset($registro['cep']) ? $registro['cep'] : ''; ?>">
  <label>Cidade:</label>
  <input type="text" name="cidade" value="<?php echo isset($registro['cidade']) ? $registro['cidade'] : ''; ?>">
  <label>Estado:</label>
  <input type="text" name="estado" value="<?php echo isset($registro['estado']) ? $registro['estado'] : ''; ?>">
  <label>E-mail:</label>
  <input type="text" name="email" value="<?php echo isset($registro['email']) ? $registro['email'] : ''; ?>">
  <label>Whatsapp:</label>
  <input type="text" name="whatsapp" value="<?php echo isset($registro['whatsapp']) ? $registro['whatsapp'] : ''; ?>">
  <input type="hidden" name="id" value="<?php echo isset($registro['id']) ? $registro['id'] : ''; ?>">
  <input type="submit" value="Apagar" style="background:red">
</form> 
