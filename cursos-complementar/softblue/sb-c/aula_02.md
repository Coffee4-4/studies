# Tipo de Dados e Operadores

### Tipos de dados

Os 4 tipos de dados básicos

| Tipo   | Intervalo         | Bits |
| ------ | ----------------- | ---- |
| char   | -127 a 127        | 8    |
| int    | -32.767 a 32.767  | 16   |
| float  | 6 casas decimais  | 32   |
| double | 10 casas decimais | 64   |

### Modificador short/long
- Permite aumentar o tamanho do tipo de dado 
- Válido somente para **int** e **double**


| Tipo                | Intervalo                      | Bits |
| ------------------- | ------------------------------ | ---- |
| int/short int       | -32.767 a 32.767               | 16   |
| long int            | -2.147.483.647 a 2.147.483.647 | 32   |
| double/short double | 10 casas decimais              | 64   |
| long double         | 10 casas decimais              | 80   |


### Modificador signed/unsigned
- Gerencia somente números positivos
- Float e double não utilizam esta propriedade 


| Tipo              | Intervalo         | Bits |
| ----------------- | ----------------- | ---- |
| unsigned char     | 0 a 255           | 8    |
| unsigned int      | 0 a 65.535        | 16   |
| unsigned long int | 0 a 4.294.967.295 | 32   |


### Varáveis
- Espaços de memória alocados para armazenar valores
- Nomenclatura
  - Não utilizar caracteres especiais
  - Não utilizar espaço em branco ou pontuações
  - Não começar com números
  - Case sensitive
- Sintaxe: **tipo nome**

**Variáveis locais**

- Escopo local (bloco de código)
- Automaticamente excluídas no final do bloco
-  Devem ser declaradas no início de cada bloco

```c
#include <stdio.h>
intmain(void)
{
    char x; // Criandoumavariáveldo tipochar 
    double carro1, carro2; // Criandoduasvariáveisnamesmalinha
    int a = 15; // Criandoe jáinicializandoumavariável
    // Utilizaçãodas variáveis }
```

**Variáveis globais**

- Escopo global
- Ocupam memória durante toda a execução
- Devem ser declaradas fora dos blocos de código, no início do arquivo

```c
#include <stdio.h>
int idade;
char nome;
int main(void)
{
	// Utilização das variáveis
}
```

**Atribuições**

- Operador igual (=)

- Vincula o valor apresentado em seu lado direito na variável existente do lado esquerdo

```c
int x = 12; // Atribui o valor 12 à variável x
double y = 75.06; // Atribui o valor 75.06 à variável y
```

- Atribuição múltipla

```c
int x, y, z;
x = y = z = 3; // Atribui o valor 3 para z, para y e para x
```

**Hexadecimais e octais**

- Hexadecimais

```c
int minhaVarHexa = 0x32; // Número 50 em decimal
int x = 0x145; // Número 325 em decimal
```

- Octais

```c
int minhaVarOcta = 062; // Número 50 em decimal
int y = 0505; // Número 325 em decimal
```

**Modificadores de armazenamento**

- extern
	- Resolve o conflito de variáveis e constantes globais entre diferentes programas em C
	- Defina no primeiro programa sem a instrução extern, e com ela nos demais programas
- static
	- Variáveis que mantém seus valores entre diferentes chamadas de uma mesma função
	- Variáveis globais que compartilham seu valor dentro do mesmo arquivo (código-fonte)
- register
	- Armazena a variável no mecanismo de acesso mais rápido disponível

```c
extern int frota;
static int chamadas = 30;
register int contador ;
double dolar = 2.10;
```

**Constantes**

- const
	- Valores constantes que não podem ser alterados durante a execução do programa
	- Não pode ser inicializadas em separado
- volatile
	- Constantes que podem sofrer alterações por vias externas ao seu programa

```c
const double PI = 3.14; // Constante do tipo int
volatile int processo = 50; // Constante VOLATILE
const int mesesQueTemNoAno; // Constante sem ser inicializada
mesesQueTemNoAno = 12; // Erro ao inicializá-la
```

**Enumerações**

- Grupo de valores que uma variável pode ter
- Limitar o valor de uma variável em um subconjunto conhecido de valores

Sintaxe: `enum nome {valores}`

```c
enum estacoesDoAno {verao, outono, inverno, primavera};
enum estacoesDoAno x;
x = verao;
x = outono;
```

