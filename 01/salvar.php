<?php

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$telefone = $_POST["telefone"];
$idade = $_POST["idade"];
$genero = $_POST["genero"];

echo "$nome - $cidade - $bairro - $rua -  $numero - $telefone - $idade - $genero";

$arquivo = fopen("clientes.txt", "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $bairro . "\t");
fwrite($arquivo, $rua . "\t");
fwrite($arquivo, $numero . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $idade . "\t");
fwrite($arquivo, $genero . "\n");

fclose($arquivo);

header("location:index.php");

?>
