package exemplo;

public class EstruturasDeDecisaoEncadeada {
	public static void main(String[] args) {
		/**
		 * Estrutura de decisão
		     * if()
		     * if() e else
		     * if(), else if()
		     * if(), else if(), else
		 **/
		
		/*Segundo exemplo*/
		
		String materia = "Java";
		
		if(materia == "PHP") {
			System.out.println("Disciplina do 4º modulo");
		} else if(materia == "Banco de dados") {
			System.out.println("Disciplina do 3º modulo");
		} else if(materia == "Java") {
			System.out.println("Disciplina do 5º modulo");
		} else {
			System.out.println("Disciplina não é dos modulos de programação");
		}
	}

}
