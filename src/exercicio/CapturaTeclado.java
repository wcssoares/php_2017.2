package exercicio;

import java.util.Scanner;
public class CapturaTeclado {
		public static void main(String[] args) {

			Scanner scan = new Scanner(System.in);
			double numero; // variavel a receber o valo digitado
			double soma = 0; // acumulador de valores
			do {
				System.out.print("Digite um numero: ");
				numero = scan.nextDouble();
				if (numero == 0) {
					break;
				}
				soma += numero;
			} while (true); // looping infinito
			scan.close();

			System.out.println("A soma dos número é:" + soma);
		}
};
