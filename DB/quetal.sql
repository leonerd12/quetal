-- Database: quetal

-- DROP DATABASE quetal;

-- CREATE DATABASE quetal
--   WITH OWNER = quetal
--        ENCODING = 'UTF8'
--        TABLESPACE = pg_default
--        LC_COLLATE = 'Portuguese_Brazil.1252'
--        LC_CTYPE = 'Portuguese_Brazil.1252'
--        CONNECTION LIMIT = -1;

-- CREATE TABLE usuario(
-- id serial primary key,
-- nome varchar(50),
-- sobrenome varchar(50),
-- dataNasc date,
-- person int,
-- gostos varchar(400),
-- email varchar(100),
-- senha varchar(100)
-- );

-- CREATE TABLE empresa(
-- id serial primary key,
-- nome varchar(100),
-- tipo int,
-- carac varchar(400)
-- );

-- INSERT into empresa (nome, carac) values ('teste5', 'CinemaComidaMusica');

-- DROP table empresa;
-- SELECT * FROM usuario;
-- SELECT * FROM empresa where carac like '' ;
-- DELETE FROM usuario;