# **Java OO: Introdução à Orientação a Objetos**

### Nosso primeiro método

```java
package bytebank;

public class Conta {
// atributos
    double saldo;
    int agencia;
    int numero;
    String titular;

//    void não retorna nada, deposita recebe um parametro
    void deposita(double valor) {
//    	this é utilizado como referencia
    	this.saldo += valor;
    	
    }
    
}

```

```java
package bytebank;

public class TestaMetodo {

	public static void main(String[] args) {
		
		Conta contaDoFulano = new Conta();

//		acessa o metodo deposita
		contaDoFulano.deposita(50);
		
		System.out.println(contaDoFulano.saldo);
		
	}

}

```

Correto, sempre usando `nomeDaReferencia.nomeDoMetodo();` , por exemplo:

```java
Conta contaDoPaulo = new Conta();
contaDoPaulo.deposita(30.0);
```

```java
public boolean saca(double valor){
    	if(this.saldo >= valor) {
    		this.saldo-=valor;
    		
    		return true;
    	}else {
    		return false;
    	}
    	
    	
    }
```

criamos um metodo boleano, que sempre espera um retorno `true` ou `false`

```java
Usamos o this dentro de um método para acessar um atributo:

class Conta {

        double saldo;
        int numero;

        void deposita(double valor) {
            this.saldo = this.saldo + valor;
        }
}
```



```java
package bytebank;

public class TestaMetodo {

	public static void main(String[] args) {
		
		Conta contaDoFulano = new Conta();

		contaDoFulano.deposita(50);
		
		System.out.println(contaDoFulano.saldo);
		
		contaDoFulano.saca(20);
		
		System.out.println(contaDoFulano.saldo);

		Conta contaDaMarcela = new Conta();
		contaDaMarcela.deposita(1000);
//		contaDaMarcela é usado como referencia para o objeto
		contaDaMarcela.transfere(300, contaDoFulano);
		
		System.out.println(contaDoFulano.saldo);
		
		
		
		
	}

}

```



```java
public boolean transfere(double valor,Conta destino) {
    	if(this.saldo >= valor) {
    		this.saldo -= valor;
    		destino.deposita(valor);
    		
    		return true;
    	}
//    	return para o codigo neste ponto, else opcional
    		return false;
    	
    }
```

### O que aprendemos?

Nessa aula falamos sobre o *comportamento* que são os **métodos**.

Vimos:

- como definir métodos com parâmetros e retorno
- como retornar algo usando a palavra chave `return`
- como usar a referência `this` para acessar um atributo
- que podemos passar uma referência como parâmetro do método
- métodos são chamadas a partir da referência usando o operador `.`



Componentisamos  as classes para que cada um fique com suas respectivas responsabilidades

```java
public class TestaBanco {

	public static void main(String[] args) {
		Cliente paulo = new Cliente();
		paulo.nome = "Paulo Silveira";
		paulo.cpf = "222.222.333-44";
		paulo.profissao = "programador";
		
		Conta contaDoPaulo = new Conta();
		contaDoPaulo.deposita(100);
		//associa o clinete paulo a conta do paulo
		contaDoPaulo.titular = paulo;
		
		System.out.println(contaDoPaulo.titular.nome);
		
	}

}

```



```java

public class Cliente {

	String nome;
	String cpf;
	String profissao;
	
	
	
}
```



```java
public class Conta {

    double saldo;
    int agencia;
    int numero;
    Cliente titular;

```

###  O que aprendemos?

Aprendemos neste capítulo:

- Realizar o relacionamento entre classes através de composição;
- Vantagens de se isolar informações repetidas em outra classe;
- Detalhes da composição;
- `NullPointerException` para atributos não inicializados e seus cuidados.

## Encapsulamento e Visibilidade

###  Atributos privados e encapsulamento

```java

public class Conta {
//privado para esta classe, não pode ser lido ou acessado por outras classes
    private double saldo;
    int agencia;
    int numero;
    Cliente titular;
```

```java
//como agora nosso atributo saldo é privado precisamos de um metodo que retorne seu valor 

 public double pegaSaldo() {
    	return this.saldo;
    }
```

Get recupera os dados e Set atribui o valor

```java
public int getNumero() {
    	return this.numero;
    }
    
    public void setNumero(int numero){
    	this.numero = numero;
    }
```

Ambos os exemplos possuem referencia ao mesmo objeto

```java
public class TestaGetESet {

	public static void main(String[] args) {
		Conta conta = new Conta();
		conta.setNumero(1233);
		System.out.println(conta.getNumero());
		
		Cliente paulo = new Cliente();
		
		paulo.setNome("Paulo Silveira");
		
		conta.setTitular(paulo);
		
		System.out.println(conta.getTitular().getNome());
		conta.getTitular().setProfissao("programador");
	
		//agora em duas linhas: 
        Cliente titularDaConta = conta.getTitular();
        titularDaConta.setProfissao("programador");

	
		System.out.println(titularDaConta); 
        System.out.println(paulo);
        System.out.println(conta.getTitular());
	}
}

```

### Para saber mais: Cuidado com o Modelo Anêmico

Durante o aprendizado dos Getters e Setters é normal pensar sempre na necessidade deles para alterar algum estado dos nossos objetos.

Mas o uso dessa prática nem sempre é a mais indicada e expressa a realidade.

Observe a classe `Conta` representada abaixo que usa apenas getter e setters como métodos:

```
class Conta{
    private String titular;
    private double saldo;

    public void setTitular(String titular){
        this.titular = titular;
    }

    public String getTitular(){
        return titular;
    }

    public void setSaldo(double saldo){
        this.saldo = saldo;
    }

    public double getSaldo(){
        return saldo;
    }

}COPIAR CÓDIGO
```

Continuamos usando atributos privados e nosso modelo parece seguir perfeitamente a proposta do encapsulamento onde a própria classe gerencia o seus estados(atributos). Uma utilização clássica dessa Conta nos levaria ao seguinte cenário:

```
Conta conta = new Conta();
conta.setTitular("Fábio")
conta.setSaldo(100.0);COPIAR CÓDIGO
```

Tudo parece perfeito, agora imagine que seja necessário sacar 50.0 dessa conta. Essa operação vai exigir que o saldo seja suficiente. Uma simples verificação como a seguir asseguraria que o saldo não tenha ficado negativo. Nesse nosso exemplo não há limite além do saldo :)

```
Conta conta = new Conta();
conta.setTitular("Fábio")
conta.setSaldo(100.0);

double valorSaque = 50.0

if(conta.getSaldo() >= valorSaque){
    double novoSaldo = conta.getSaldo() - valorSaque;
    conta.setSaldo(novoSaldo)
}COPIAR CÓDIGO
```

Funcionou! Mas um problema é que essa lógica de restringir o saque à quantidade de saldo vai ter que ser refeita toda vez que for necessária uma operação de saque na nossa conta. Além do problema de duplicações desse trecho, um problemão para encapsulamento é que quem está de fato controlando as regras do saldo da conta é quem está usando a Conta. Em outras palavras nada impede que alguém implemente um limite extra para isso e tenha uma regra completamente diferente dos demais objetos do tipo Conta:

```
Conta conta = new Conta();
conta.setTitular("Fábio");
conta.setSaldo(100.0);

double valorSaque = 50.0;

if(conta.getSaldo() + 1000.0 >= valorSaque){
    double novoSaldo = conta.getSaldo() - valorSaque;
    conta.setSaldo(novoSaldo)
}COPIAR CÓDIGO
```

Quando construímos classes que se limitam a ter atributos privados com os setters e getters normalmente dizemos que são classes que só carregam valor, por isso são comumente chamados de classes fantoches ou `Value Objects`.

Uma classe fantoche é a que não possui responsabilidade alguma, a não ser carregar um punhado de atributos! Definitivamente isso não é a Orientação a Objetos! Esse modelo embora usado em alguns momentos não deve ser prática comum ao desenvolver o domínio do nosso projeto com risco de se cair no `Modelo Anêmico` que é exatamente o que a `Conta` hoje é. Uma classe onde os dados e comportamentos/lógicas não estão juntos.

Voltando ao nosso exemplo da Conta, percebe-se que no mundo real as operações poderiam ser representadas com métodos como `saca( )` e `deposita( )` em vez de só termos `setSaldo( )`:

```
class Conta{
    private String titular;
    private double saldo;

    public void setTitular(String titular){
        this.titular = titular;
    }

    public String getTitular(){
        return titular;
    }

    public void saca(double valor){
        if(valor > 0 && saldo >= valor){
            saldo -= valor;
        }
    }

    public void deposita(double valor){
        if(valor>0){
            saldo += valor;
        }
    }

    public double getSaldo(){
        return saldo;
    }

}COPIAR CÓDIGO
```

Perceba que as lógicas de saque e depósito estão representados dentro da classe e além disso nosso `setSaldo()` deixa de fazer sentido para o usuário da Conta. A maneira de interagir com o saldo é sempre via uma das operações anteriores:

```
Conta conta = new Conta();
conta.setTitular("Fábio");
conta.deposita(100.0);

double valorSaque = 50.0;
conta.saca(valorSaque);

double valorDeposito = 70.0;
conta.deposita(valorDeposito)COPIAR CÓDIGO
```

Muito melhor não é mesmo? Nada de duplicações de código por aí e muito menos outras classes controlando o estado da nossa Conta como tínhamos anteriormente.

## Conclusão

Setters e Getters devem ser usados com cautela e nem todos os atributos privados precisam ter expostos esses dois métodos com riscos de cairmos em um `modelo anêmico` que tem os seus comportamentos controlados por outras classes.



### O que aprendemos?

Aprendemos nesta aula:

- Atributos privados, restringindo o acesso aos atributos
- Encapsulamento de código
- Métodos de leitura dos atributos, os ***getters\***
- Métodos de modificação dos atributos, os ***setters\***
- *Getters* e *Setters* de referência



## Construtores e membros estáticos 



Métodos construtores exigem alguns requisitos na hora instanciar definidos os padrões necessários para criar o objeto. 



```java
public class Conta {
//privado para esta classe, não pode ser lido ou acessado por outras classes
    private double saldo;
    private int agencia;
    private int numero;
    private Cliente titular;
    
    
  
    public Conta( int agencia, int numero) { 
        this.agencia = agencia;
        this.numero = numero;
        System.out.println("estou criando uma conta" + this.numero);
    }
```

```java
public class TestaValores { 
    public static void main(String[] args) { 
        Conta conta = new Conta(1337, 24226);
    }
} 
```

Validação do metodo da conta

```java
 public void setNumero(int numero) { 
        if (numero <= 0) {
            System.out.println("não pode valor <= 0");
            return;
        }
        this.numero = numero;
    }
```

Quando utilizamos construtores  podemos ignorar alguns usos de `set`, como `setNumeroDaConta`, afinal queremos que seja estática;

### **Static**

Método `static` referencia a classe e não a instância 

```java
//    static pertence a classe, não a instancia
    private static int total;
    
    
  
    public Conta( int agencia, int numero) { 
    	Conta.total++;
    	System.out.println("O total de contas até o momento é " + Conta.total);
        this.agencia = agencia;
        this.numero = numero;
        System.out.println("estou criando uma conta " + this.numero);
    }
```

```java
public class TestaValores { 
    public static void main(String[] args) { 
        Conta conta = new Conta(1337, 24226);
        
        Conta conta2 = new Conta(425, 2422566);
        Conta conta3 = new Conta(54, 3453);
        
        System.out.println(Conta.getTotal());
    }
} 
```

Métodos `static` tem apenas acesso ao conteúdo da classe e não da instancia .

```java
    public static int getTotal() {
    	return Conta.total;
    }
    
    
```

### **Para saber mais: reaproveitamento entre construtores**

Nesse capítulo o nosso aprendizado foi focado nos construtores. Eles são elaborados visando que os objetos tenham seus atributos inicializados na própria construção. Essa estratégia evita estados inconsistentes no nosso objeto. Veja essa classe:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    //getters e setters omitidos        

}
```

Como já se sabe, quando o construtor não está declarado na classe usa-se o padrão, que não recebe parâmetro algum. Logo, uma utilização da classe poderia ser como a seguir:

```java
Carro carro = new Carro();
carro.setAno(2013);
carro.setPreco(35000.0);
```

Ficou faltando uma informação preciosa! Qual o modelo dele? Para evitar esse tipo de problema devemos exigir os dados que fazem sentido o Carro ter logo na criação. Algo como:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    public Carro(int ano, String modelo, double preco){
        this.ano = ano;
        this.modelo = modelo;
        this.preco = preco;
    }

    //getters e setters omitidos        

}
```

Agora a utilização exige a presença dos 3 parâmetros definidos.

```java
Carro carro = new Carro(2013, "Gol", 35000.0);
```

Tudo funciona bem! Até que um dia é pedido que o nosso sistema aceite a criação com a passagem somente do modelo e valor. Nessa situação deve-se encarar o ano como sendo 2017. Uma solução seria:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    public Carro(int ano, String modelo, double preco){
        this.ano = ano;
        this.modelo = modelo;
        this.preco = preco;
    }

    //Novo construtor AQUI!
    public Carro(String modelo, double preco){
        this.ano = 2017;
        this.modelo = modelo;
        this.preco = preco;
    }

    //getters e setters omitidos        

}
```

E dessa forma pode-se construir carros com qualquer um dos dois construtores:

```java
Carro carro = new Carro(2013, "Gol", 35000.0);
Carro outroCarro = new Carro("Civic", 95000.0);
```

Só que na empresa onde esse sistema está sendo codificado existe uma equipe de testes que verificou que o nosso sistema permite a criação de um Carro com datas anteriores ao primeiro automóvel que chegou ao Brasil, um Peugeot trazido por Santos Dumont em 1891. (Alura também é história!) Além de também permitir que o modelo não seja passado(null) e o preço inválido.

O desenvolvedor logo tratou de implementar essa regra em um dos construtores:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    public Carro(int ano, String modelo, double preco){
        if(ano >= 1891){
            this.ano = ano;
        }else{
            System.out.println("O ano informado está inválido. Por isso usaremos 2017!");
            this.ano = 2017;
        }

        if( modelo != null){
            this.modelo = modelo;
        }else{
            System.out.println("O modelo não foi informado. Por isso usaremos Gol!");
            this.modelo = "Gol";
        }

        if(preco > 0){
            this.preco = preco;
        }else{
            System.out.println("O preço não é válido. Por isso usaremos 40000.0!");
            this.preco = 40000.0;
        }        
    }
    //....

}
```

Perceba que como temos dois construtores a regra também deveria valer para o outro:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    public Carro(int ano, String modelo, double preco){
        if(ano >= 1891){
            this.ano = ano;
        }else{
            System.out.println("O ano informado está inválido. Por isso usaremos 2017!");
            this.ano = 2017;
        }

        if( modelo != null){
            this.modelo = modelo;
        }else{
            System.out.println("O modelo não foi informado. Por isso usaremos Gol!");
            this.modelo = "Gol";
        }

        if(preco > 0){
            this.preco = preco;
        }else{
            System.out.println("O preço não é válido. Por isso usaremos 40000.0!");
            this.preco = 40000.0;
        }

    }

    //Novo construtor AQUI!
    public Carro(String modelo, double preco){
        this.ano = 2017;
        if( modelo != null){
            this.modelo = modelo;
        }else{
            System.out.println("O modelo não foi informado. Por isso usaremos Gol!");
            this.modelo = "Gol";
        }

        if(preco > 0){
            this.preco = preco;
        }else{
            System.out.println("O preço não é válido. Por isso usaremos 40000.0!");
            this.preco = 40000.0;

    }

    //getters e setters omitidos        

}
```

Funcionou mas o código está duplicado e nossa classe começa a cheirar mal! Códigos duplicados exigem manutenção em dobro no futuro e em grande parte das vezes um futuro nem tão distante. Seria ótimo se fosse possível reaproveitar a lógica de validação do primeiro construtor declarado não é mesmo? Reaproveitaríamos todo ele e qualquer mudança também traria o impacto direto. No Java podemos chamar a implementação de um construtor através de outro usando simplesmente `this( )` com os parâmetros exigidos pelo construtor.

Observe como ficaria o segundo construtor da nossa classe:

```java
    public Carro(String modelo, double preco){
    //chamando o construtor que recebe int, String e double. Nosso primeiro!    
        this(2017, modelo, preco);
    }
```

Muito mais simples de manter não é mesmo? Nossa classe, Carro, ficaria portanto assim:

```java
public class Carro{
    private int ano;
    private String modelo;
    private double preco;

    public Carro(int ano, String modelo, double preco){
        if(ano >= 1891){
            this.ano = ano;
        }else{
            System.out.println("O ano informado está inválido. Por isso usaremos 2017!");
            this.ano = 2017;
        }

        if( modelo != null){
            this.modelo = modelo;
        }else{
            System.out.println("O modelo não foi informado. Por isso usaremos Gol!");
            this.modelo = "Gol";
        }

        if(preco > 0){
            this.preco = preco;
        }else{
            System.out.println("O preço não é válido. Por isso usaremos 40000.0!");
            this.preco = 40000.0;
        }        
    }

    //Novo construtor AQUI!
    public Carro(String modelo, double preco){
        this(2017, modelo, preco);
    }

    //getters e setters omitidos        

}
```

### Conclusão

No Java é possível fazer a chamada de um construtor dentro de outro e faz-se isso para evitar duplicações de códigos e regras. Afinal uma regra aplicada em um construtor normalmente será a mesma para o outro caso. Para isso usa-se o `this( )` passando os parâmetros correspondentes ao construtor que se queira chamar.

### **O que aprendemos?**

Aprendemos nesta aula:

- Construtor da classe, possibilitando receber argumentos e inicializar atributos a partir da criação de um objeto
  - Com isso, a inicialização dos atributos recebidos no construtor torna-se obrigatória
- Atributos da classe, os atributos estáticos
- Métodos da classe, os métodos estáticos
- Ausência de referência, do **`this`**, dentro de métodos estáticos

