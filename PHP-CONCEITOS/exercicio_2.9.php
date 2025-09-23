<?php 

$numero1 = readline("Digite um numero: ");

$numero2 = readline("Digite outro numero: ");

if($numero1 > $numero2) {
    echo "O maior número é $numero1";
} elseif ($numero2 > $numero1) {
    echo "O maior número é $numero2";
} else {
    echo "Os números são iguais";
}
?>