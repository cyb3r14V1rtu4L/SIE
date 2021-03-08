CREATE VIEW xmf_primer_reporte AS
(
  SELECT concat(p.funcionario_name,' ',p.funcionario_lastname) AS representante,
  r.xmf_casillas_id,xmf_partidos_id,p.formula AS nombre,bloque,p.orden,r.is_present,c.name as casilla,
  c.lugar_indicado,c.gente_fila,c.nombres_fila
  FROM xmf_presences_references AS r
  INNER JOIN xmf_casillas AS c ON r.xmf_casillas_id = c.id
  INNER JOIN xmf_partidos AS p ON r.xmf_partidos_id = p.id
  ORDER BY p.bloque,p.orden
);
