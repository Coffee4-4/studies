# **Introdução ao SQL com Oracle: Manipule e consulte dados**

Criando tabelas

```sql
CREATE TABLE TB_CLIENTES (
    CPF VARCHAR(11),
    NOME VARCHAR(100),
    ENDERECO1 VARCHAR(150),
    ENDERECO2 VARCHAR(150),
    BAIRRO VARCHAR(50),
    CIDADE VARCHAR(50),
    ESTADO VARCHAR(2),
    CEP VARCHAR(8),
    IDADE INT,
    SEXO VARCHAR(1),
    LIMITE_CREDITO FLOAT,
    VOLUME_COMPRA FLOAT,
    PRIMEIRA_COMPRA NUMBER(1)
)
```

```sql
CREATE TABLE TB_CLIENTES2 (
    CPF VARCHAR(11),
    NOME VARCHAR(100),
    ENDERECO1 VARCHAR(150),
    ENDERECO2 VARCHAR(150),
    BAIRRO VARCHAR(50),
    CIDADE VARCHAR(50),
    ESTADO VARCHAR(2),
    CEP VARCHAR(8),
    IDADE INT,
    SEXO VARCHAR(1),
    LIMITE_CREDITO FLOAT,
    VOLUME_COMPRA FLOAT,
    PRIMEIRA_COMPRA NUMBER(1)
);

CREATE TABLE TB_CLIENTES3 (
    CPF VARCHAR(11),
    NOME VARCHAR(100),
    ENDERECO1 VARCHAR(150),
    ENDERECO2 VARCHAR(150),
    BAIRRO VARCHAR(50),
    CIDADE VARCHAR(50),
    ESTADO VARCHAR(2),
    CEP VARCHAR(8),
    IDADE INT,
    SEXO VARCHAR(1),
    LIMITE_CREDITO FLOAT,
    VOLUME_COMPRA FLOAT,
    PRIMEIRA_COMPRA NUMBER(1)
);
```

Deletando tabelas

```sql
DROP TABLE TB_CLIENTES2;
```

# **O que aprendemos?**

- Os tipos de dados que compõem uma tabela

- Um pouco do **SQL Developer**

- Como acessar o **SQL Plus**

- Como criar uma tabela, tanto via SQL como por assistente

  ```sql
  CREATE TABLE TB_NOME(atributos);
  ```

  

- Como apagar uma tabela

- ```sql
  DROP TABLE TB_NOME;
  ```

**Inserindo registros na tabela**



```sql
insert into tb_produtos
(produto, nome, embalagem, tamanho, sabor, preco_lista)
values
('1040107','Light - 350 ml - Melância', 'Lata',
'350 ml','Melância',4.56)
;


select * from tb_produtos;


insert into tb_vendedores
(matricula, nome, percentual_comissao)
values
('00233','José Geraldo da Fonseca', 0.10)
;

select * from tb_vendedores;	
```

## Alterando registros

```sql
update tb_produtos set
embalagem = 'Lata',
preco_lista = 2.46
where produto = '544931';

update tb_produtos set
embalagem = 'Garrafa'
where produto = '1078680';



select * from tb_produtos;
```

Depois do `where` vem a condição 

## Excluindo registros

```sql
delete from tb_produtos
where produto = '1078680';
```



##  Incluindo a chave primária

```sql
alter table tb_produtos add constraint
pk_tb_produtos primary key (produto);
```

`constraint` é uma restrição

## Manipulando de datas e campos lógicos

```sql
ALTER TABLE TB_CLIENTES ADD CONSTRAINT PK_TB_CLIENTES PRIMARY KEY (CPF);
```

Inclui uma chave primaria na tabela clientes

```sql
ALTER TABLE TB_CLIENTES ADD DATA_NASCIMENTO DATE;
```

Adiciona a coluna data de nascimento

```sql
INSERT INTO TB_CLIENTES (
    CPF, NOME, ENDERECO1, ENDERECO2, 
    BAIRRO, CIDADE, ESTADO, CEP, IDADE, 
    SEXO, LIMITE_CREDITO, VOLUME_COMPRA, 
    PRIMEIRA_COMPRA, DATA_NASCIMENTO
) VALUES (
    '00388934777', 'João da Silva', 'Rua Projetada A número 10', 
    NULL , 'VILA ROMAN', 'TRÊS RIOS', 'RJ', '22222222', 53, 'M', 
    20000.00, 2000, 0, TO_DATE('12/10/1965','MM/DD/YYYY')
);
```

inclui um novo registro

`TO_DATE('12/10/1965','MM/DD/YYYY')`usar o to_date permite manipular o formato da data.

### O que aprendemos?

Nesta aula, aprendemos:

- A incluir dados em uma tabela, de diversas formas

```sql
INSERT INTO TB_TABELA (COLUNAS) VALUES (VALORES DO REGISTRO)
```



- Como alterar um dado já existente na tabela

```sql
ALTER TABLE TB_TABELA ADD NOVA_COLUNA DATE;
```



- Como apagar um dado

```sql
delete from tb_TABELA
where COLUNA = 'VALOR';
```



- A importância das chaves primárias e o cuidado que temos que ter ao criá-las

```SQL
ALTER TABLE TB_TABELA ADD CONSTRAINT PK_TB_TABELA PRIMARY KEY (IDENTIFICADOR);
```



- A manipular campos lógicos e de datas

```sql
TO_DATE('12/10/1965','MM/DD/YYYY')
```



## Consultando os dados

Podemos fazer um select apenas nos campos que desejamos visualizar, também é possível criar aliás através do `AS` com o nome que quisermos dar a coluna. 

```sql
select nome, idade, data_nascimento from tb_clientes;

select cpf as  Cod_Cliente, nome, idade, data_nascimento from tb_clientes;
```

Podemos acrescentar a cláusula `WHERE` para criar condições para nossos filtros

```sql
SELECT * FROM TB_PRODUTOS WHERE PRODUTO = '1037797';

SELECT * FROM TB_CLIENTES WHERE CIDADE = 'Rio de Janeiro';

SELECT * FROM TB_PRODUTOS WHERE SABOR = 'Laranja';

UPDATE TB_PRODUTOS SET SABOR ='Cítricos' WHERE SABOR = 'Laranja';

SELECT * FROM TB_PRODUTOS WHERE SABOR = 'Cítricos';
```

Podemos também trabalhar com operadores condicionais, quando aplicado a campos string ele devolve a sequencia respeitando a tabela ASCII 

```sql
select * from tb_clientes;

select * from tb_clientes where idade = 22;

select * from tb_clientes where idade > 22;
select * from tb_clientes where idade < 22;
select * from tb_clientes where idade >= 22;
select * from tb_clientes where idade <= 22;
select * from tb_clientes where idade <> 22;

select * from tb_clientes where nome >= 'Carlos Eduardo';
```

Filtrando datas

```sql
select * from tb_clientes;
select * from tb_clientes where data_nascimento = '07/10/95';
select * from tb_clientes where data_nascimento = to_date('07/10/1995','dd/mm/yyyy');

select * from tb_clientes where data_nascimento > to_date('07/10/1995','dd/mm/yyyy');

select * from tb_clientes where to_char(data_nascimento,'MM') = 9;
```

Aplicando operadores lógicos 

```sql

SELECT * FROM TB_PRODUTOS;

SELECT * FROM TB_PRODUTOS WHERE PRECO_LISTA >= 16.007;

SELECT * FROM TB_PRODUTOS WHERE PRECO_LISTA >= 16 AND PRECO_LISTA <= 21

SELECT * FROM TB_CLIENTES WHERE IDADE > 22 AND SEXO = 'F'

SELECT * FROM TB_CLIENTES WHERE CIDADE = 'Rio de Janeiro' OR BAIRRO = 'Jardins';

SELECT * FROM TB_CLIENTES WHERE (IDADE > 22 AND SEXO = 'F') AND (CIDADE = 'Rio de Janeiro' OR BAIRRO = 'Jardins')


```

### O que aprendemos?

Nesta aula, aprendemos:

- Como visualizar os dados de uma tabela
- Como segregar a seleção de dados
- A usar as condições de maior e menor na seleção de dados da tabela
- Como filtrar dados através de datas
- Como implementar filtros compostos

