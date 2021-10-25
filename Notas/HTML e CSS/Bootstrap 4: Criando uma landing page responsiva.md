# **Bootstrap 4: Criando uma landing page responsiva**

## Instalando o bootstrap e implementando a navbar

```css
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
```

```js
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
```

Links de importação do BT.

### **O que são as CDNs**

As CDN — sigla em inglês para *Content Delivery Network* ou Rede de Distribuição de Conteúdo (tradução livre) são redes de conteúdo não centralizadas. Ou seja, elas hospedam um determinado conteúdo em servidores espalhados em várias partes, permitindo dessa forma a distribuição de forma eficaz independente de onde o acesso é realizado.

Existem várias redes CDN, e qualquer empresa pode contratar o serviço de uma para seu sistema, e essa decisão normalmente é tomada levando em conta vários aspectos como ganhos de performance, segurança e custos. O uso de CDNs pode ser indicado para ambientes de desenvolvimento e páginas estáticas.

Caso queira baixar os arquivos, eles estão disponíveis na [página de download do Bootstrap](https://github.com/twbs/bootstrap/releases/download/v4.1.3/bootstrap-4.1.3-dist.zip), porém os arquivos das bibliotecas **jQuery** e **Popper** (necessárias para algumas funcionalidade do Bootstrap) devem ser baixadas em separado, pois não estão inclusas neste pacote. Se tiver alguma dúvida sobre os outros tipos de instalação, pode mandar no fórum.

### Sobre CSS

Lembrando que só é possível trabalhar com um "nível" de pais e filhos. O CSS não consegue enxergar além disso, ou seja, não temos "elementos-avôs" nem "elementos-netos":

### **O que aprendemos?**

Nesta primeira aula, aprendemos a:

- Como instalar o Bootstrap;
- Como o Bootstrap funciona utilizando classes para aplicar estilos pré-definidos;
- Pesquisar na documentação e descobrir se o Bootstrap tem a funcionalidade que precisamos (e de que forma usamos isso!);
- A ler o código do Bootstrap, interpretá-lo e fazer as modificações que precisamos;
- O funcionamento do Flexbox (e a versão Bootstrap, Flex), uma das ferramentas de alinhamento poderosas do CSS.

Links da documentação do Bootstrap que utilizamos nessa aula:

[Introdução](https://getbootstrap.com/docs/4.3/getting-started/introduction/)

[Navbar](https://getbootstrap.com/docs/4.3/components/navbar/)

[Flex](https://getbootstrap.com/docs/4.3/utilities/flex/)

[Position: fixed-top](https://getbootstrap.com/docs/4.3/utilities/position/#fixed-top)



## Adicionando o carrossel e resolvendo bugs

### **O que aprendemos?**

- Ler mais um pouco da documentação do Bootstrap e usar seu componente `carousel`;
- Ler o HTML e ir descobrindo o que fazem algumas partes do código do Bootstrap;
- Utilizar o CSS para complementar nosso trabalho quando o Bootstrap não cobre 100%;
- Trabalhar com elementos de tamanho fixo, como imagens; Formatar textos utilizando o Bootstrap.

Para nossas fontes, utilizamos a biblioteca de fontes gratuitas do [Google Fonts](https://fonts.google.com/), porém você também pode utilizar outras, como a da [Adobe](https://edgewebfonts.adobe.com/) e do site [Font Squirrel](https://www.fontsquirrel.com/). O Font Squirrel também permite que você crie suas próprias web fonts! Porém, sempre antes de utilizar qualquer fonte em seus projetos, leia com atenção as licenças de uso, pois algumas fontes e serviços de fontes podem ter restrições de uso, por exemplo, para uso comercial.

Links da documentação do Bootstrap que utilizamos nessa aula:

[Carrossel](https://getbootstrap.com/docs/4.3/components/carousel/)

[Tipografia](https://getbootstrap.com/docs/4.3/content/typography/)

[Alinhamento de texto](https://getbootstrap.com/docs/4.3/utilities/text/#text-alignment)

## Títulos, textos e ferramentas de espaçamento

### **Margens e padding**

É possível utilizar apenas `m` e `p` somente nos caso em que todos os "lados" terão o mesmo valor. Por exemplo:

```html
<div class="m-2 p-4">`COPIAR CÓDIGO
```

Nos diz que todos os lados da margem têm o mesmo valor de `2rem` e todos os lados do padding têm o mesmo valor de `4rem`.

### **O que aprendemos?**

- Formatar elementos de texto com o Bootstrap;
- Utilizar o Bootstrap para controlar larguras e alturas de `margin` e `padding`.

Links da documentação do Bootstrap que utilizamos nessa aula:

[Texto](https://getbootstrap.com/docs/4.3/utilities/text/)

[Alinhamento de texto](https://getbootstrap.com/docs/4.3/utilities/text/#text-alignment)

[Cores](https://getbootstrap.com/docs/4.3/utilities/colors/)

[Espaçamento](https://getbootstrap.com/docs/4.3/utilities/spacing/)



### Conhecendo o HTML semântico e inserindo cards

###  **O que aprendemos?**

- Utilizar o componente card do Bootstrap;
- Personalizar o componente quando necessário usando nossas próprias classes;
- Adotar algumas tags semânticas em nosso HTML

Links da documentação do Bootstrap que utilizamos nessa aula:

[Cards](https://getbootstrap.com/docs/4.3/components/card/)

[Background Color](https://getbootstrap.com/docs/4.3/utilities/colors/#background-color)



## Alinhando elementos com Bootstrap Grid

### **Sobre breakpoints de tela**



O Bootstrap Grid é super útil para criarmos leiautes responsivos. Como o Bootstrap trabalha com o conceito de mobile first (onde podemos criar leiautes pensando em primeiro lugar nos dispositivos móveis), dispomos de várias ferramentas de ajuste para que nenhum elemento "quebre" quando saímos de tamanhos de tela menores para maiores.

No caso do Grid, é possível informar qual será a disposição dos elementos do leiaute para cada tipo de tela. A tabela abaixo mostra os breakpoints (pontos de quebra) padrão, porém isso pode ser personalizado.

![tabela com breakpoints de tela do Bootstrap](https://caelum-online-public.s3.amazonaws.com/1116-bootstrap4/05/breakpoints.png)

Sendo pensado para mobile first, o prefixo `col-` (sem indicação do tamanho de tela), seguido do número de colunas, já é o indicado para as menores larguras, como por exemplo dispositivos móveis. A partir daí, é possível criar um leiaute para cada largura de tela, até as extra largas (acima de 1200px de largura).



### **Faça como eu fiz na aula**



Como vimos, o sistema de grids do Bootstrap trabalha com a seguinte estrutura:

```
container 
|----- linha
        |----- colunasCOPIAR CÓDIGO
```

De acordo com os tamanhos de tela que queremos trabalhar, podemos começar pelas telas menores/dispositivos móveis (mobile first) e a partir daí, desenvolver nosso leiaute.

![exemplo de leiautes responsivos em celular, tablet e desktop](https://caelum-online-public.s3.amazonaws.com/1116-bootstrap4/05/telas-responsivas.png)

Um guia visual sobre como funciona a divisão em colunas do Bootstrap Grid:

![exemplo de colunas do Bootstrap](https://caelum-online-public.s3.amazonaws.com/1116-bootstrap4/05/bootstrap-grid.png)

### **O que aprendemos?**

- Trabalhar mais com o componente card e personalizar as informações;
- Fazer mais alguns ajustes de imagens;
- Utilizar algumas ferramentas do Bootstrap Grid.

Links da documentação do Bootstrap que utilizamos nessa aula:

[Grid](https://getbootstrap.com/docs/4.3/layout/grid/)

## Modais e últimos ajustes

### **O que aprendemos?**

- Identificar alguns tipos de modais na documentação do Bootstrap;
- Inserir modais em nosso código;
- Estilizar e adaptar os modais ao nosso projeto;
- Identificar onde podemos utilizar mais classes semânticas e fazer substituições;
- Fazer pequenos ajustes de leiaute com o CSS;
- Implementar um rodapé com elementos de texto simples.

Links da documentação do Bootstrap que utilizamos nessa aula:

[Modal](https://getbootstrap.com/docs/4.3/components/modal/)

[Alinhamento de texto](https://getbootstrap.com/docs/4.3/utilities/text/#text-alignment)

[Flex](https://getbootstrap.com/docs/4.3/utilities/flex/)

[Margin e Padding](https://getbootstrap.com/docs/4.3/layout/utilities-for-layout/#margin-and-padding)

[Text Decoration](https://getbootstrap.com/docs/4.3/utilities/text/#text-decoration)









Modulo: Pessoas

Faça o cadastro de novos usuários e pessoas, liste, altere e delete com moderação 