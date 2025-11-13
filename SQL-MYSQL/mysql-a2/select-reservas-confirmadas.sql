USE hospeda_brasil;

SELECT r.*, s.status_nome
FROM reservas r
JOIN status_reservas s ON s.id_status = r.status_id
WHERE r.data_checkin > '2025-05-31' AND r.deletado_em IS NULL AND s.status_nome = 'Confirmada';