<?php

$nomes = ["Renata", "Alan", "Ingrid", "Sara", "Kleber"];
$arquivo = fopen("nomes.txt", "a");
$i = 0;
while ($i < count($nomes)) {
    echo $nomes[$i] . "<br>";
    fwrite($arquivo, $nomes[$i] . "\n");
    $i++;
}
fclose($arquivo);

?>