use eduvale__2_sem;

select paisid,count(*) as total
from cidade
group by paisid;


select p.paisnome,count(*) as total
from pais p inner join cidade c 
on p.paisid=c.paisid
group by p.paisnome;

select *from categorias;
select *from produtos;

select c. nome_categoria as `Categoria`,count(*) as `Total por categoria`
from categorias c inner join produtos p 
on c.categoria_id=p.categoria
group by c.nome_categoria;




create table cliente(
clienteid int not null primary key auto_increment,
nomecliente varchar(60)

);

insert cliente values(null, 'zezinho');
insert cliente values(null, 'mariazinha');


create table pedido(
pedidoid int not null primary key auto_increment,
clienteid int not null,
produtoid int not null,
qtde int,
pedidodata date,
foreign key(clienteid)references cliente(clienteid),
foreign key(produtoid)references produtos(produto_id)
);
insert pedido values(null,1,2,2,'2020-09-10');
insert pedido values(null,1,1,1,'2020-09-10');
insert pedido values(null,2,3,3,'2020-12-10');
insert pedido values(null,2,4,5,'2020-09-10');



select p.pedidoid as codigo, p.pedidodata as data,
sum(i.qtde *p.produtopreco) as total
from pedido p inner join 
item i on p.pedidoid=i.pedidoid
inner join produto p 
on p.produtoid=i.produtoid
group by p.pedido, p.pedidodata;





create table categoria(
categoriaid int not null primary key auto_increment,
categorianome varchar(60)
);

insert categoria values(null,'Fruta');
insert categoria values(null,'Carne');
insert categoria values(null,'Doces');

drop table produto;
create table produto (
produtoid int not null primary key auto_increment,
produtodesc varchar(60),
produtopreco decimal(4,2),
produtoestoque int,
categoriaid int not null,

foreign key(categoriaid)references categoria(categoriaid)
);
select *from produto;
insert produto values(null,'Banana',2.50,10,1);
insert produto values(null,'Maça',3.50,20,1);
insert produto values(null,'Pera',1.50,15,1);
insert produto values(null,'Filé de frango',19.50,30,2);
insert produto values(null,'Cookie',6.50,5,3);

select categorianome, sum(p.produtoestoque * p.produtopreco) 
as 'valor estoque'
from categoria c inner join produto p
on c.categoriaid=p.categoriaid
group by  c.categorianome;