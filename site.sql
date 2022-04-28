create schema site;
use site;

Create table login (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

Create table cadastro (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
repSenha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

INSERT INTO login (login, senha) VALUES ("iasmyn", "iasmynadsd");

INSERT INTO cadastro (login, senha, repsenha) VALUES ("iasmyn", "iasmynadsd", "iasmynadsd");

select * from cadastro;
select * from login;