#Tipo de Dados e Operadores

###Tipos de dados

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
- Espaços de memória alcocados para armazenar valores
- Nomenclatura
  - Não utilizar caracteres especiais
  - 