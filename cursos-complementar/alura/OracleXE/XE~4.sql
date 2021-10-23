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