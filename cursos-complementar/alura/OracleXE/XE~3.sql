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