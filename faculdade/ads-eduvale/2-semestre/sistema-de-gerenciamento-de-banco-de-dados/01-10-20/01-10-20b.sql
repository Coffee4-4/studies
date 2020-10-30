use eduvale__2_sem;

create table categorias(
categoria_id int not null primary key auto_increment,
nome_categoria varchar(120)
);

create table produtos(
produto_id int not null primary key auto_increment,
nome_produto varchar(120),
categoria int,
valor decimal (8,2),
momento_registro datetime default,

foreign key(categoria) references categorias(categoria_id)
);


insert categorias(nome_categoria) values ('periferico'),('hardware'),('rede'),('impressoras');

insert produtos(nome_produto,categoria,valor) values ('msi z370',2,430.00),
('memoria hp 8gb',2,326.11),
('teclado logitech',1,60.00),
('cabo de rede cat e6',3,340.00),
('mouse dell',1,130.00),
('cpu intel',2,1030.00),
('ssd ',2,830.00),
('asus z370',2,430.00);

select nome_categoria as `Categoria`, nome_produto as `Produto` from `categorias` 
left outer join produtos 
on categorias.categoria_id = produtos.categoria
ORDER BY nome_produto asc 
;



