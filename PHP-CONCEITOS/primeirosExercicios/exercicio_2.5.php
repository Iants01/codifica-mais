<?php 

$numero = readline("Digite um numero: ");

$resto = $numero % 2;

if($resto != 0) {
    echo "O número é impar";
} else {
    echo "O número é par";
}

?>