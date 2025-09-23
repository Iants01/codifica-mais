<?php 

$nota1  = readline("Digite a sua nota primeira nota:  ");

$nota2  = readline("Digite a sua nota segunda nota:  ");

$nota3  = readline("Digite a sua nota terceira nota:  ");

$mediaNotas = ($nota1 + $nota2 + $nota3) / 3;

if($mediaNotas >= 6) {
    echo "Você foi aprovado";
} else {
    echo "Você foi reprovado";
}

?>