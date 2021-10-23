select embalagem from tabela_de_produtos;
-- Retorna apenas o tipo de embalagens que temos no banco sem repetir
select distinct embalagem from tabela_de_produtos;

-- Podemos usar um filtro 
select distinct sabor from tabela_de_produtos where sabor = 'Laranja';
-- Podemos combinar também duas colunas
select DISTINCT embalagem, sabor from tabela_de_produtos;