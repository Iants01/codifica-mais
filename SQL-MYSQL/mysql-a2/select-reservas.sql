SELECT
h.nome_completo AS nome_hospede,
r.id_reserva  AS id_reserva,
l.titulo AS titulo_hospedagem,
s.status_nome AS status_reserva
FROM
reservas r
JOIN
hospedes h ON h.id_hospede = r.id_hospede
JOIN
status_reservas s ON s.id_status = r.status_id
JOIN
hospedagens l ON l.id_hospedagem = r.id_hospedagem;