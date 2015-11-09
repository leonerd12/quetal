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
-- email varchar(100),
-- senha varchar(100)
-- );

SELECT * FROM usuario;
-- DELETE FROM usuario;