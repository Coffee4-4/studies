
public class TestaValores { 
    public static void main(String[] args) { 
        Conta conta = new Conta(1337, 24226);
        
        Conta conta2 = new Conta(425, 2422566);
        Conta conta3 = new Conta(54, 3453);
        
        System.out.println(Conta.getTotal());
    }
} 