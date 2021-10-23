select estado, sum(limite_de_credito) as soma_limite
from tabela_de_clientes 
group by estado
having sum(limite_de_credito) >= 900000
;


select embalagem, max(preco_de_lista) as maior_preco,
min(preco_de_lista) as menor_preco from tabela_de_produtos
group by embalagem
having sum(preco_de_lista) <= 80;