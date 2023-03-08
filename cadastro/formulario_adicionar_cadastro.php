<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Adicionar Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="adicionar_cadastro.css">
</head>
<body>
    <form method="post" action="processar_formulario_adicionar_cadastro.php" class="adicionar_cadastro">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required><br>

        <label for="numero">Número:</label>
	<input type="number" name="numero" id="numero" required><br>

        <label for="complemento">Complemento:</label>
	<input type="text" name="complemento" id="complemento" required><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" required><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" required><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" required><br>
       
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="whatsapp">Whatsapp:</label>
        <input type="number" name="whatsapp" id="whatsapp" required><br>

 
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
