```mysql
select t.titulodescricao, g.gravadoranome -- campos a serem exibigos
from gravadora g inner join titulo t -- tabelas envolvidas 
on g.gravadoraid = t.gravadoraid -- chaves estrangeiras e primaria 
```

> quando os campos tem nomes iguais é preciso indicar apelidos `titulo t` 
>
> `ON` na comparação `t.gravadoraid`
>
> `select t.titulodescricao` indica o apelido dado a tabela 

Outra forma de escrever

```mysql
select titulodescricao, gravadoranome 
from gravadora inner join 
titulo  on gravadora_gravadoraid = titulo_gravadoraid
```

```mysql
select t.titulodescricao, g.gravadoranome 
from gravadora g, titulo t
where g.gravadoraid = t.gravadoraid
```

> ON como as tabelas se relacionam chaves primaria e estrangeira 

**Primeiro vamos criar uma banco de dados SQL** 

```mysql
CREATE DATABASE GAVADORA_X;
USE GRAVADORA_X;

CREATE TABLE GRAVADORA(
    GRAVADORA_ID INT PRIMARY KEY auto_increment NOT NULL,
    GRAVADORA_NOME VARCHAR(50),
    GRAVA_ATIVA BOOLEAN DEFAULT 1
);

INSERT INTO GRAVADORA(GRAVADORA_ID, GRAVADPRA_NOME, GRAVA_ATIVA) VALUES 
(NULL, 'IEMAIL', NULL),
(NULL, 'RECORD', NULL),
(NULL, 'SONYMUSIC', NULL);

CREATE TABLE TITULOS(
    TITULO_ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    TITULODESCRICAO VARCHAR(40),
    GRAVADORA_ID INT,
    PRECO DOUBLE,
    FOREIGN KEY(GRAVADORA_ID) REFERENCES GRAVADORA(GRAVADORA_ID)
);
```



```mysql
SELECT G.GRAVADORA_ID AS 'ID DA GRAVADORA'/*Nome da coluna*/, G.GAVADORA_NOME AS 'NOME DA GRAVADORA', T.TITULO_DESCRICAO AS 'TITULO DO ALBUM' FROM GRAVADORA G INNER JOIN TITULOS T ON G_GRAVADORA_ID = T.GRAVADORA_ID
```





```mysql
select t.titulodescreicao as titulo,
g.gravadora as gravadora
from g left outer join titulo t
on g.gravadoraid = t.gravadoraid 
```

```mysql
create table categoria(
categoriaid int not null primary key auto_increment,
categorianome varchar(30)
);

drop table cd;
create table cd(
cdid int not null primary key  auto_increment,
cdtitulo varchar(50),
gravadoraid int not null,
categoriaid int not null,
foreign key(gravadoraid) references gravadora(gravadoraid),
foreign key (categoriaid) references categoria(categoriaid)
);

insert into categoria
(categorianome) values('opera')
insert into categoria
(categorianome) values('rock in roll')
insert into categoria
(categorianome) values('anos 90');
select * from categoria;

insert into cd(cdtitulo,gravadoraid,categoriaid)
values('conga la conga',1,3);



```

