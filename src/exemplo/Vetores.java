package exemplo;

public class Vetores {
	public static void main(String[] args) {
		// cria��o do vetor
		String[] nomes = new String[11];
		
		nomes[0] = "Claudemir";
		nomes[1] = "Glauco";
		nomes[2] = "Gabriel";
		nomes[3] = "Jonathan";
		nomes[4] = "Rog�rio";
		nomes[5] = "Luiz";
		nomes[6] = "Andr�";
		nomes[7] = "Paulo";
		nomes[8] = "Willian";
		nomes[9] = "Bergson";
		nomes[10] = "Mariana";
		
		// impress�o usando for
		for(int i = 0; i < nomes.length; i++)
			System.out.println(nomes[i]);
		
		System.out.println("------------ separador ----------");
		
		// Impress�o usando foreach
		for(String n : nomes)
			System.out.println(n);
	}

}
