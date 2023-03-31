<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    
<h1>Cadastro de Cliente</h1>
<form action="salvar.php" method="post">
    Nome:<input name="nome" required><br>
    Cidade:<input name="cidade" required><br>
    Bairro:<input name="bairro" required><br>
    Rua:<input name="rua" required><br>
    Número:<input name="numero" required><br>
    Telefone:<input name="telefone" required><br>
    Idade:<input name="idade" required><br>
    Genero:<select name="genero">
    <option value="Não informar">Prefiro não informar</option>    
    <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>

    <button type="submit">Salvar</button>

</form>

</body>
</html>