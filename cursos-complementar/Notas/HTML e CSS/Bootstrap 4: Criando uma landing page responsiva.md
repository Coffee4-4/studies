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

