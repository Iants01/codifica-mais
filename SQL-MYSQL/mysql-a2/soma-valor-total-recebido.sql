USE hospeda_brasil;

SELECT  SUM(valor_noite * noites) AS total_recebido
FROM reservas
WHERE deletado_em IS NULL;