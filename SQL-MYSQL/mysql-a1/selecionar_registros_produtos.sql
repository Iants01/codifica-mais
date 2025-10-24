USE gestao_produtos;

SELECT * FROM produtos WHERE quantidade > 50 AND deletado_em IS NULL;