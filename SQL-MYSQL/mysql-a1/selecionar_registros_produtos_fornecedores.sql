USE gestao_produtos;

SELECT f.id_fornecedor, f.razao_social, f.cnpj, p.nome
FROM fornecedores f
JOIN produtos p
ON f.id_fornecedor = p.fornecedor;