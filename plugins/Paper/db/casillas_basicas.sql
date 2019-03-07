UPDATE users
  SET username = Replace(username, 'BASICA', 'B1')
WHERE username LIKE '%BASICA%';

UPDATE xmf_casillas
  SET name = Replace(name, 'BASICA', 'B1')
WHERE name LIKE '%BASICA%';
