<?php

function aplicarDesconto($valor, $desconto) {
    
    return $valor * (1-($desconto / 100));
}

function calcularDescontoProgressivo($valor) {

if($valorCompra > 500) {
return $valor * (1-(20 / 100));

} elseif ($valorCompra >= 100) {

return $valor * (1-(10 / 100));

} else {

return $valor;
};

};

$valorCompra = readline("Digite o valor da compra: ");
$desconto = readline("Digite a porcentagem de desconto: ");


if($valorCompra > 500 && $desconto == 20) {

$valorDesconto = aplicarDesconto($valorCompra, $desconto);
echo "O valor total a pagar é R$$valorDesconto";

} elseif ($valorCompra >= 100 && $desconto == 10) {

$valorDesconto = aplicarDesconto($valorCompra, $desconto);
echo "O valor total a pagar é R$$valorDesconto";

} elseif ($valorCompra < 100 && $desconto == 0) {
echo "O valor total a pagar é R$$valorCompra";

} else {
    echo "nao sei ainda";
};
