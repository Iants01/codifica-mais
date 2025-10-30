USE hospeda_brasil;

SELECT AVG((r.valor_noite * r.noites) + r.taxa_limpeza + r.taxa_servico - desconto) AS media_por_cidade, h.cidade
FROM reservas r
JOIN hospedagens h ON r.id_hospedagem = h.id_hospedagem
GROUP BY cidade;