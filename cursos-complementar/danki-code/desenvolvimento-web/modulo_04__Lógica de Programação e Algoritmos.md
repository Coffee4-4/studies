# Criando Algoritmos 

Como pensar como um programador?

- Pense em etapas 
- Pense nas ações de cada etapa 

```
Quero atravessar a rua
1) Estar na faixa de pedestre
	{Estou na faixa?
		Os carros pararam?
			Ação final: Posso atravessar!
            }
            
	Não esta na faixa de pedestre
		temos de ir para a faixa de pedestre 
		enquanto não chegar na faixa, continue até chegar. 
		
```

```
Objetivo: Jantar
--- Estar em casa 
		Estou com fome?
			Okay, posso jantar.
				Temos comida?
					Sim! Vamos jantar.
					
--- Se não estiver em casa, tenho que ir para casa
	cheguei em casa? Okay executamos a mesma ação do primeiro bloco. 
```

```
--- FORMULÁRIO DE CADASTRO
USUÁRIO ENVIOU FORMULÁRIO 
{
	1- email está correto?
		se estiver
		{
			nome está correto?
			se estiver{
				cpf esta correto?
				se estiver{
				REALIZAR CADASTRO
				}se não{
				apareça mensagem dizendo que está errado!
				}
			}se não{
			apareça mensagem dizendo que está errado!
			}
		}se não{
		apareça mensagem dizendo que está errado!
		}
}
```

