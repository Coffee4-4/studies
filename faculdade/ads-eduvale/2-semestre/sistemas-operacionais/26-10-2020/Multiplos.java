public class Multiplos {
    public static void main(String[] args) {
        if (args.length < 2) {
            System.out.println("Erro! Use Multiplos <num1> <num2>");
            return;
        }
        try {
            int n1 = Integer.parseInt(args[0]);
            int n2 = Integer.parseInt(args[1]);

            if (n1 % n2 == 0) {
                System.out.printf("O número %d é multiplo de %d%n", n1, n2);

            } else {
                System.out.printf("O número %d NÃO é multiplo de %d%n", n1, n2);

            }
        }catch (NumberFormatException ex) {
            System.out.println("Erro!: ");
            ex.printStackTrace();
        }
    }
}