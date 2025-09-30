<?php

function aplicarDesconto($valor, $desconto) {
    
    return $valor * (1-($desconto / 100));
}

function calcularDescontoProgressivo($valor) {

if($valor > 500) {
$pagar =  $valor * (1-(20 / 100));
echo "o valor total a pagar é R$$pagar.";

} elseif ($valor >= 100) {

$pagar =  $valor * (1-(10 / 100));
echo "o valor total a pagar é R$$pagar.";

} else {

echo "o valor total a pagar é R$$valor.";
};

};

$valorCompra = readline("Digite o valor da compra: ");
$desconto = readline("Digite a porcentagem de desconto: ");


if($valorCompra > 500 && $desconto <= 20) {

$valorDesconto = aplicarDesconto($valorCompra, $desconto);
echo "O valor total a pagar é R$$valorDesconto";

} elseif ($valorCompra >= 100 && $desconto <= 10) {

$valorDesconto = aplicarDesconto($valorCompra, $desconto);
echo "O valor total a pagar é R$$valorDesconto";

} elseif ($valorCompra < 100 && $desconto == 0) {
echo "O valor total a pagar é R$$valorCompra";

} else {
    echo "Aplicando o maior desconto para esse valor,  ";
     calcularDescontoProgressivo($valorCompra);
};
