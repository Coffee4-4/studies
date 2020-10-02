create database eduvale__2_sem;
use eduvale__2_sem;

create table pais(
paisid int not null primary key auto_increment,
paisnome varchar(20));

create table cidade(
cidadeid int not null primary key auto_increment,
cidadenome varchar(20),
paisid int not null,
foreign key(paisid)references pais(paisid)
);

insert pais values(null, 'brasil');
insert pais values(null, 'argentina');

insert pais values(null, 'argelia');

insert into pais(paisnome) values ('Russia'), ('colombia'),('paraguai');

insert cidade values(null, 'avare',1);

insert cidade values(null, 'itai',1);
insert cidade values(null, 'arandu',1);

insert cidade values(null, 'buenos aires',2);

update cidade set cidadenome='aguas de santa barbara' where cidadeid= 3;

select paisnome, cidadenome from pais left outer join cidade on pais.paisid = cidade.paisid;
