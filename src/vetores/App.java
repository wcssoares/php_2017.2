package vetores;

public class App {
	public static void main(String[] args) {
		Aritmetica aritmetica = new Aritmetica();
		
		System.out.println(aritmetica.somar(1.2, 5.7, 9.0, 2.5, 9.8, 7.3, 8.4, 7.0));
		
		System.out.println(aritmetica.subtr(5.7, 1.2));
		
		System.out.println(aritmetica.multiplicacao(9.0, 2.5));
		
		System.out.println(aritmetica.divisao(9.8, 7.3));
	}
}
