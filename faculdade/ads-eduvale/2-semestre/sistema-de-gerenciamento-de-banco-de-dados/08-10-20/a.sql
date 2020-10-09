select nome as `Nome funcionario`, codigo_malote as `Cod. Malote`, 
descricao as `Conteudo do Malote`, sotuacao_malote as `status malote`
from funcionario inner join malotes innerjoin conteudos




select f.Nome, m.codigo_malote as `Codigo do malote`, c.descrocap as conteudo,m.situacao_malote 
as `situação`
from FUNCIONARIOS F inner join malotes m on 
f.matricula = m.matricula
inner join conteudo c on c.codigo_conteudo=m.codigo_conteudo



