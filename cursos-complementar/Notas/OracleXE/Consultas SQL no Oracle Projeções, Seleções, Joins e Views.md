## Configurando o ambiente 

Executando carga de script através do SQLplus, após executar o script é necessário o `commit` 

```sql
@Caminho do arquivo SQL\Criacao_Esquema.sql

commit
```

## Filtrando as consultas de dados

Revisando consultas 

```sql
select * from tabela_de_clientes;

select cpf, nome from tabela_de_clientes;

select cpf as IDENTIFICADOR, nome as CLIENTE from tabela_de_clientes;

select * from tabela_de_produtos where sabor = 'Uva';

select * from tabela_de_produtos where embalagem = 'PET';
-- String é case sensitive ou seja tem de ser exado ou não retorna o esperado
select * from tabela_de_produtos where embalagem = 'pet';

select * from tabela_de_produtos where preco_de_lista >19.50;
```

Analise a expressão abaixo:

```sql
(NOT ((3 > 2) OR (4 >= 5)) AND (5 > 4)) OR (9 < 0)
```

```sql
(NOT ((3 > 2) OR (4 >= 5)) AND (5 > 4)) OR (9 < 0)
(NOT ((Verdadeiro) OR (Falso)) AND (Verdadeiro)) OR (Falso)
(NOT (Verdadeiro) AND (Verdadeiro)) OR (Falso)
(Falso AND Verdadeiro) OR (Falso)
(Falso) OR (Falso)
Falso
```

```sql
select * from tabela_de_produtos where sabor = 'Manga' or tamanho = '470 ml';

select * from tabela_de_produtos where sabor = 'Manga' and tamanho = '470 ml';

select * from tabela_de_produtos where not (sabor = 'Manga' or tamanho = '470 ml');

select * from tabela_de_produtos where (sabor = 'Manga' and not (tamanho = '470 ml'));

-- Filtro contém, se assemelha a varios OR
select * from tabela_de_produtos where sabor in ('Laranja', 'Manga');


select * from tabela_de_clientes where cidade in ('Rio de Janeiro', 'Sao Paulo') and idade > 20;

select * from tabela_de_clientes where cidade in ('Rio de Janeiro', 'Sao Paulo') and (idade >= 20 and idade <=22);
```

### Usando Like

Funciona apenas com textos 

```sql
select * from tabela_de_produtos where sabor like '%Maca%';

select * from tabela_de_produtos where sabor like '%Maca%' and embalagem = 'PET';
```

### O que aprendemos?

Nesta aula, aprendemos:

- A importância de conhecer a base de dados antes de fazer as consultas
- Os comandos de consultas e como podemos filtrá-las
- Como podemos mesclar filtros condicionais com `AND` e `OR`
- Que podemos usar operadores condicionais nos filtros que envolvem valores
- Como funciona o comando `LIKE`

## Mudando a apresentação dos dados de uma consulta

DOSTOMCT - Irá retornar somente linhas com valores diferentes

```SQL
SELECT DISTINCT * FROM TABELA
```

```sql
select embalagem from tabela_de_produtos;
-- Retorna apenas o tipo de embalagens que temos no banco sem repetir
select distinct embalagem from tabela_de_produtos;

-- Podemos usar um filtro 
select distinct sabor from tabela_de_produtos where sabor = 'Laranja';
-- Podemos combinar também duas colunas
select DISTINCT embalagem, sabor from tabela_de_produtos;
```



ROWNUM - Número da linha

```sql
SELECT * FROM TABELA WHERE ROWNUM <= 4
```

Retorna os 4 primeiros registros 

```SQL
SELECT ROWNUM, CODIGO_DO_PRODUTO, NOME_DO_PRODUTO FROM TABELA_DE_PRODUTOS;

SELECT CODIGO_DO_PRODUTO, NOME_DO_PRODUTO FROM TABELA_DE_PRODUTOS WHERE ROWNUM <= 5;
```

Não é possível fazer com intervalos  `>=`

### Ordenando a saída da consulta

```SQL
SELECT * FROM TAB ORDER BY CAMPO
```

Apresenta o resultado da consulta ordenado pelo campo determinado no `ORDER BY`

Podemos ordenar

`ASC` ascendente

`DESC` descendente

```sql
Select * from tabela_de_produtos;
-- Lista do mais barato
Select * from tabela_de_produtos order by preco_de_lista;
-- Lista do maior para o menor
Select * from tabela_de_produtos order by preco_de_lista desc;
-- Ordem alfabetica
Select * from tabela_de_produtos order by nome_do_produto;
-- É possivel passar mais de um filtro
Select * from tabela_de_produtos order by embalagem  desc, nome_do_produto asc;

```

### **Agrupando os resultados**

```SQL
SELECT <campos> FROM TAB GROUP BY CAMPO
```

Apresenta o resultado agrupando valores numéricos por uma chave de critério 

Ex: Queremos agrupar pelo campo X e somar os valores em Y.

```sql
SELECT X, SUM(Y) FROM TAB GROUP BY X
```

Podemos usar:

`SUM` Soma

`Max` Máximo 

`Min` Mínimo 

`AVG` Média 

`COUNT` Conta ocorrências

```sql
select * from tabela_de_clientes;

select estado, limite_de_credito from tabela_de_clientes;

select estado, sum(limite_de_credito) as total_credito from tabela_de_clientes group by estado;

select embalagem, preco_de_lista from tabela_de_produtos;

select embalagem, max(preco_de_lista)as maior_preco from tabela_de_produtos GROUP BY embalagem;

select embalagem, count(*) as numero_produtos from tabela_de_produtos group by embalagem;

select bairro, sum(limite_de_credito) as total_credito from tabela_de_clientes 
where cidade = 'Rio de Janeiro'  group by bairro;

select estado, bairro, sum(limite_de_credito) as total_credito from
tabela_de_clientes group by estado, bairro order by estado, bairro;
```

### **Usando condições para classificar resultados**

`CASE` - Fazemos um teste em um ou mais campos e, dependendo do resultado, teremos um ou outro valor

```SQL
CASE
	WHEN <condição 1> THEN <Valor1>
	WHEN <condição2> THEN <Valor2>
	(...)
	WHEN <condiçãoN> THEN <ValorN>
	ELSE ValorELSE
END	
```



```SQL
SELECT X,
CASE
	WHEN Y>=8 AND Y<=10 THEN 'OTIMO'
	WHEN Y>=7 AND Y <8 THEN 'BOM'
	WHEN Y>=5 AND Y<7 THEN 'MEDIO'
	ELSE 'RUIM'
END	
FROM TABELA
```

```sql
select nome_do_produto, preco_de_lista,
(case
    when preco_de_lista >= 12 then 'Produto caro'
    when preco_de_lista >= 7 and preco_de_lista < 12 then 'Produto em conta'
    else ' Produto Barato'
    end) as Status_Preco
    from tabela_de_produtos
    ;
    
    select nome_do_produto, preco_de_lista,
(case
    when preco_de_lista >= 12 then 'Produto caro'
    when preco_de_lista >= 7 and preco_de_lista < 12 then 'Produto em conta'
    else ' Produto Barato'
    end) as Status_Preco
    from tabela_de_produtos
    where sabor = 'Manga'
    ;
    
    select embalagem,
(case
    when preco_de_lista >= 12 then 'Produto caro'
    when preco_de_lista >= 7 and preco_de_lista < 12 then 'Produto em conta'
    else ' Produto Barato'
    end) as Status_Preco,
    avg(preco_de_lista) as Media_preco
    from tabela_de_produtos
    group by embalagem, 
    (case
    when preco_de_lista >= 12 then 'Produto caro'
    when preco_de_lista >= 7 and preco_de_lista < 12 then 'Produto em conta'
    else ' Produto Barato'
    end)
    ;
```

Case permite testar varias condições e atribuir valores a estas condições como o exemplo que vimos na classificação do preço de embalagens e produtos.

### **Usando a condição HAVING**

HAVING é uma condição (Filtro) que se aplica ao resultado de uma agregação.



```SQL
SELECT X, SUM(Y) FROM TAB GROUP BY X
```

Quero só visualizar os campos cuja soma der maior que 6 

```SQL
SELECT X, SUM(Y) FROM TAB GROUP BY X
HAVING SUM(Y) >= 6
```

```sql
select estado, sum(limite_de_credito) as soma_limite
from tabela_de_clientes 
group by estado
having sum(limite_de_credito) >= 900000
;


select embalagem, max(preco_de_lista) as maior_preco,
min(preco_de_lista) as menor_preco from tabela_de_produtos
group by embalagem
having sum(preco_de_lista) <= 80;
```

### **O que aprendemos?**

Nesta aula, aprendemos:

- Como apresentar somente linhas distintas em uma seleção
- A ordenar a saída da seleção
- Como agrupar linhas por um conjunto de campos e aplicar um critério de agrupamento sobre os campos numéricos
- O comando `HAVING`, que aplica um filtro usando como condição os campos numéricos agrupados
- Como limitar a saída das consultas
- A usar o `CASE` para classificar um determinado campo por um critério

## Juntando tabelas e consultas

