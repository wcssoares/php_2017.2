package exemplo;

public class MetodoEqualsIgnoreCase {
	public static void main(String[] args) {
		String texto = "java";
		
		// equal � equivalente aos "=="
		if(texto.equals("Java")) {
			System.out.println("� igual");
		} else {
			System.out.println("N�o � igual");
		}
		
		System.out.println("\n----------------------\n");
		// ignorando o caso
		if(texto.equalsIgnoreCase("JAVA")) {
			System.out.println("� igual");	
		} else {
			System.out.println("N�o � igual");
		}
	}

}
