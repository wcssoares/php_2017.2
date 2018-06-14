package Alunos;

import java.util.Scanner;

public class informaAluno {
	public static void main(String[] args) {
		
		String nome;
		long telefone;
		int rg;
		String matricula;
		
		try(Scanner scan = new Scanner(System.in)) {
			
			System.out.print("Informe o nome: ");
			nome = scan.nextLine();
			
			System.out.print("Informe o telefone: ");
			telefone = Long.parseLong(scan.nextLine());
			
			System.out.print("Informe o rg: ");
			rg = Integer.parseInt(scan.nextLine());
			
			System.out.print("Informe a matricula: ");
			matricula = scan.nextLine();
		}
		
		System.out.println("Os dados informados foram:\n" + "Nome: " + nome + "\nTelefone: " + telefone + "\nRG: " + rg + "\nMatricula: " + matricula);
		
	    }
}
