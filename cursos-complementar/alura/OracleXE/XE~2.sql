Select * from tabela_de_produtos;
-- Lista do mais barato
Select * from tabela_de_produtos order by preco_de_lista;
-- Lista do maior para o menor
Select * from tabela_de_produtos order by preco_de_lista desc;
-- Ordem alfabetica
Select * from tabela_de_produtos order by nome_do_produto;
-- É possivel passar mais de um filtro
Select * from tabela_de_produtos order by embalagem  desc, nome_do_produto asc;
