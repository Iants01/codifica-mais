<?php 

$numero = readline("Digite um numero para exibir sua tabuada de 10: ");

for($contador = 0; $contador <= 10; $contador++) {
    $resultadoTabuada = $numero * $contador;
    echo "$numero x $contador = $resultadoTabuada\n";
}

?>