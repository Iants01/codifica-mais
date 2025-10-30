USE hospeda_brasil;

SELECT r.id_reserva, r.deletado_em,  c.nome_completo AS nome_hospede,  a.nome_completo AS nome_anfitriao, h.titulo AS titulo_hospedagem
FROM reservas r
JOIN hospedagens h ON r.id_hospedagem = h.id_hospedagem
JOIN anfitrioes a ON a.id_anfitriao = h.id_anfitriao
JOIN hospedes c ON r.id_hospede = c.id_hospede
WHERE r.deletado_em IS NOT NULL;

