USE gestao_produtos;

UPDATE produtos
SET quantidade = 0
WHERE id_produto = 4;

UPDATE produtos
SET preco = 89.99
WHERE id_produto = 1;

UPDATE produtos
SET descrição = 'Caneta com tinta vermelha'
WHERE id_produto = 9;
