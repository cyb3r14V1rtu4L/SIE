/*ALTER TABLE xmf_casillas ADD COLUMN status CHAR(1) DEFAULT NULL;
ALTER TABLE xmf_casillas MODIFY hora_cierre TIME DEFAULT NULL;

INSERT INTO xmf_partidos
( nombre, formula, is_coalicion, has_parent, parent_id, is_funcionario, funcionario_name, funcionario_lastname, description, created, modified, bloque, orden)
VALUES( 'Coalicion Morena-Pt', 'coa_morena_pt', 1, 0, 0, 0, '', '', '', '2018-04-17 21:14:39.000', '2018-04-17 21:14:39.000', NULL, NULL);
*/

ALTER TABLE xmf_casillas ADD COLUMN nombres_fila TEXT DEFAULT NULL;
ALTER TABLE xmf_casillas ADD COLUMN rg_id CHAR(36) DEFAULT NULL AFTER user_id;

INSERT INTO users (id,username, password, first_name, last_name, role_id,active,created,modified)
VALUES('86e06920-6035-419d-906f-cc672f90eclo','rg2','$2y$10$7Nr7lHpeouo.3Swq.mM.3uNu0zjJmyyEGxgTOA1F9UYq7dXSFfyHK','Carlos', 'Lopez','e687cb91-4cdf-4ab2-992f-e76584199c2e',1,now(),now());

INSERT INTO users (id,username, password, first_name, last_name, role_id,is_superuser,active,created,modified)
VALUES('86e06920-6035-419d-906f-cc672f90eadm','admin1','$2y$10$7Nr7lHpeouo.3Swq.mM.3uNu0zjJmyyEGxgTOA1F9UYq7dXSFfyHK','Cristina', 'Torres','5197c80d-2d30-4225-a757-b31592c9e0f0',1,1,now(),now());

INSERT INTO users (id,username, password, first_name, last_name, role_id,is_superuser,active,created,modified)
VALUES('86e06920-6035-419d-906f-cc672f90adm2','admin2','$2y$10$7Nr7lHpeouo.3Swq.mM.3uNu0zjJmyyEGxgTOA1F9UYq7dXSFfyHK','Ulises', 'Mejia','5197c80d-2d30-4225-a757-b31592c9e0f0',1,1,now(),now());
