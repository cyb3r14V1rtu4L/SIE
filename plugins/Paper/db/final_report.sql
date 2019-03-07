SELECT (SELECT CONCAT(m.first_name, m.last_name) AS monitor
FROM users m WHERE m.id=c.rg_id) AS monitor, c.name, u.first_name, u.last_name,
c.rc_telefono, c.rg_telefono, u.username
FROM  xmf_casillas AS c
INNER JOIN users AS u ON c.user_id = u.id;
