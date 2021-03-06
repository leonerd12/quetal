﻿-- Database: quetal

-- DROP DATABASE quetal;

-- CREATE DATABASE quetal
--   WITH OWNER = quetal
--        ENCODING = 'UTF8'
--        TABLESPACE = pg_default
--        LC_COLLATE = 'Portuguese_Brazil.1252'
--        LC_CTYPE = 'Portuguese_Brazil.1252'
--        CONNECTION LIMIT = -1;

-- CREATE TABLE usuario(
-- id serial PRIMARY KEY,
-- nome varchar(50),
-- sobrenome varchar(50),
-- dataNasc date,
-- email varchar(100),
-- senha varchar(100)
-- );
-- 
-- CREATE TABLE empresa(
-- id serial PRIMARY KEY,
-- nome varchar(100),
-- tipo varchar(50),
-- image_path VARCHAR(255) NOT NULL DEFAULT '',
-- );

-- 
-- INSERT INTO empresa (nome, tipo) VALUES ('Recanto da Peixada', 'restaurante', 'images/recanto.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('La Sorelle Pizzaria', 'restaurante', 'images/sorelle.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('X.Com Sanduicheria', 'restaurante', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('O Cajueiro', 'restaurante', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Ville Roy Grill', 'restaurante', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Água Doce Cachaçaria', 'restaurante', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Cine Super K', 'cinema', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Cine Araújo', 'cinema', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Cinemark', 'cinema', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Santa Cerva PUB', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('CH Bar na Fazenda', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Antique PUB', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Marina do Rio Branco', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Almirante Club', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Haras Cunhã Pucá', 'balada', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Opium Motel', 'motel', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Motel Le Baron', 'motel', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Motel Bhurity''s', 'motel', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Afrodite Motel', 'motel', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Praça das Águas', 'passeio', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Praça da Bandeira', 'passeio', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Complexo Ayrton Senna', 'passeio', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Praça Germano Sampaio', 'passeio', 'images/.jpg');
-- INSERT INTO empresa (nome, tipo) VALUES ('Orla Taumanan', 'passeio', 'images/.jpg');
-- 
-- Update empresa set image_path = 'images/.jpg' WHERE id = 25;
-- 
-- CREATE TABLE interesse(
-- id serial PRIMARY KEY,
-- tipo varchar(50)
-- );
-- 
-- 
-- INSERT INTO interesse (tipo) VALUES ('Pipoca');1
-- INSERT INTO interesse (tipo) VALUES ('Música');2
-- INSERT INTO interesse (tipo) VALUES ('Comida');3
-- INSERT INTO interesse (tipo) VALUES ('Passeio');4
-- INSERT INTO interesse (tipo) VALUES ('Bebida');5
-- INSERT INTO interesse (tipo) VALUES ('Companhia');6
-- INSERT INTO interesse (tipo) VALUES ('Festa');7
-- INSERT INTO interesse (tipo) VALUES ('Fim de Tarde');8
-- INSERT INTO interesse (tipo) VALUES ('Noite');9
-- 
-- 
-- 
-- CREATE TABLE us_int(
-- id serial PRIMARY KEY,
-- id_us int REFERENCES usuario(id) ON DELETE CASCADE,
-- id_int int REFERENCES interesse(id) ON DELETE CASCADE
-- );
-- 
-- CREATE TABLE emp_int(
-- id serial PRIMARY KEY,
-- id_emp int REFERENCES empresa(id) ON DELETE CASCADE,
-- id_int int REFERENCES interesse(id) ON DELETE CASCADE
-- );


-- INSERT INTO emp_int (id_emp, id_int) VALUES (18,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (18,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (18,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (19,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (19,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (19,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (20,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (20,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (20,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (21,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (21,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (21,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (21,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (21,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (22,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (22,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (22,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (23,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (23,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (23,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (23,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (23,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (24,1);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (24,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (24,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (24,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (25,1);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (25,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (25,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (25,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (26,1);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (26,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (26,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (26,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (27,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (27,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (27,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (27,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (27,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (28,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (28,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (28,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (28,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (28,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (29,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (29,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (29,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (29,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (29,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (30,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (30,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (30,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (30,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (30,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (31,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (31,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (31,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (31,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (31,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (32,2);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (32,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (32,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (32,7);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (32,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (33,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (33,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (34,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (34,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (35,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (35,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (36,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (36,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (37,4);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (37,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (37,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (37,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (38,4);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (38,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (38,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (38,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (39,4);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (39,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (39,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (39,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (40,4);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (40,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (40,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (40,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (41,4);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (41,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (41,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (41,9);
-- 
-- 
-- CREATE TABLE filtro(
-- id serial PRIMARY KEY,
-- n_filtro int,
-- nome varchar(50),
-- valor int
-- );
-- 
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (1,'companhia/amigos',1);
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (1,'companhia/aDois',2);
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (1,'companhia/sozinho',3);
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (2,'financeiro/qualquer',1);
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (2,'financeiro/barato',2);
-- INSERT INTO filtro (n_filtro, nome, valor) VALUES (2,'financeiro/caro',3);

-- 
-- CREATE TABLE fil_emp(
-- id serial PRIMARY KEY,
-- id_fil int REFERENCES filtro(id) ON DELETE CASCADE,
-- id_emp int REFERENCES empresa(id) ON DELETE CASCADE
-- );

-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,18);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,19);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,20);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,21);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,22);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,23);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,24);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,25);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,26);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,27);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,28);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,29);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,30);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,31);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,32);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,37);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,38);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,39);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,40);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,41);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,18);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,19);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,20);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,21);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,22);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,23);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,24);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,25);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,26);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,27);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,28);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,29);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,30);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,31);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,32);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,33);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,34);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,35);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,36);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,37);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,38);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,39);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,40);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,41);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,18);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,19);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,20);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,21);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,22);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,23);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,27);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,28);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,29);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,30);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,31);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,32);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,37);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,38);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,39);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,40);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,41);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,18);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,19);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,20);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,21);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,22);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,23);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,24);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,25);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,26);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,27);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,28);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,29);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,30);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,31);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,32);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,33);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,34);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,35);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,36);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,37);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,38);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,39);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,40);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,41);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,20);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,25);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,26);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,28);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,29);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,32);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,33);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,35);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,37);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,38);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,39);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,40);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,41);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,18);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,19);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,21);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,22);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,23);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,24);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,27);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,30);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,31);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,34);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,36);


-- CREATE TABLE us_sugestao(
-- id serial,
-- emp1 int REFERENCES empresa(id) ON DELETE CASCADE,
-- emp2 int NULL REFERENCES empresa(id) ON DELETE CASCADE, 
-- emp3 int NULL REFERENCES empresa(id) ON DELETE CASCADE,
-- id_us int REFERENCES usuario(id) ON DELETE CASCADE
-- );

-- DROP TABLE usuario, empresa, interesse, us_int, emp_int;
-- SELECT * FROM empresa inner join fil_emp on empresa.id = fil_emp.id_emp inner join filtro on filtro.id = fil_emp.id_fil;
-- SELECT * FROM fil_emp inner join empresa on empresa.id = fil_emp.id_emp where id_fil = 1 OR id_fil = 2;
-- SELECT * FROM fil_emp inner join filtro on filtro.id = fil_emp.id_fil inner join empresa on empresa.id = fil_emp.id_emp;
-- SELECT DISTINCT empresa.nome, empresa.tipo FROM empresa INNER JOIN emp_int ON empresa.id = emp_int.id_emp INNER JOIN interesse ON interesse.id = emp_int.id_int inner join fil_emp on empresa.id = fil_emp.id_emp inner join filtro on filtro.id = fil_emp.id_fil WHERE interesse.id = 3;
-- SELECT * FROM empresa;
-- SELECT * FROM us_sugestao;
-- SELECT A.nome, C.tipo FROM empresa A INNER JOIN emp_int B ON A.id = B.id_emp INNER JOIN interesse C ON C.id = B.id_int WHERE C.id IN (SELECT A.id FROM interesse A INNER JOIN us_int B ON A.id = B.id_int INNER JOIN usuario C ON C.id = B.id_us WHERE C.id = 6);

-- ALTER TABLE empresa ADD COLUMN image_path VARCHAR(255) NOT NULL DEFAULT '';



-- update empresa set nome='Subway' where id=20;
-- update empresa set nome='Bar do Rock' where id=32;
-- update empresa set nome='Bar do Rock' where id=32;
-- delete from empresa where id=31;
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Bob''s', 'restaurante', 'images/bobs.jpg');
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Barril Roraima', 'restaurante', 'images/barril.jpg');
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Chão de Brasa', 'restaurante', 'images/chao.jpg');
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Giraffas', 'restaurante', 'images/giraffas.jpg');
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Trigos Gourmet', 'restaurante', 'images/trigos.jpg');
-- INSERT INTO empresa (nome, tipo, image_path) VALUES ('Umai Temakeria', 'restaurante', 'images/umai.jpg');
-- 
-- INSERT INTO emp_int (id_emp, id_int) VALUES (42,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (42,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (42,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (42,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (43,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (43,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (43,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (43,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (44,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (44,5);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (44,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (44,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (45,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (45,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (45,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (45,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (46,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (46,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (46,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (46,9);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (47,3);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (47,6);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (47,8);
-- INSERT INTO emp_int (id_emp, id_int) VALUES (47,9);
-- 
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,42);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,43);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,44);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,45);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,46);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (1,47);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,42);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,43);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,44);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,45);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,46);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (2,47);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,42);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,43);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,45);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,46);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (3,47);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,42);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,43);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,44);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,45);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,46);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (4,47);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,43);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,44);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,45);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (5,47);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,42);
-- INSERT INTO fil_emp (id_fil, id_emp) VALUES (6,46);


-- ALTER TABLE usuario ADD COLUMN image_path VARCHAR(255) NOT NULL DEFAULT 'images/avatar.jpg';

