SELECT a.nome_completo AS nome_proprietario, COUNT(h.id_hospedagem) AS quantitdade_hospedagens
FROM anfitrioes a
JOIN hospedagens h ON a.id_anfitriao = h.id_anfitriao
GROUP BY a.nome_completo;
