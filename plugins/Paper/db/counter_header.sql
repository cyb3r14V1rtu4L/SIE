DROP VIEW IF EXISTS xmf_view_count_header;
CREATE VIEW xmf_view_count_header AS(
SELECT status,rg_id,
	CASE WHEN status='P' AND hora_presencia IS NOT NULL THEN COUNT(id) END AS 'presencias',
	CASE WHEN status IS NULL AND hora_presencia IS NULL THEN COUNT(id) END AS 'ausencias',
	CASE WHEN status='I' AND hora_instalacion IS NOT NULL THEN COUNT(id) END AS 'instaladas',
	CASE WHEN status='V' AND hora_inicio IS NOT NULL THEN COUNT(id) END AS 'abiertas',
	CASE WHEN status='X' AND hora_cierre IS NOT NULL THEN COUNT(id) END AS 'cerradas'
FROM xmf_casillas
GROUP BY status,rg_id);
