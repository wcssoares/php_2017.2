package vetores;

public class AppArray {
	public static void main(String[] args) {
		// declara��o do vetor
		int[] lista = new int[5];
		
		// atribui��o dos valores ao vetor
		
		lista[0] = 7;
		lista[1] = 11;
		lista[2] = 1;
		lista[3] = 2;
		lista[4] = 5;
		
		// impress�o a partir de cada posi��o
		System.out.println(lista[0]);
		System.out.println(lista[1]);
		System.out.println(lista[2]);
		System.out.println(lista[3]);
		System.out.println(lista[4]);
		
		// impress�o "automatizada", usando estrutura de repeti��o
		for(int i = 0; i < 5; i++) {
			System.out.println(lista[i]);
		}
		
		// definindo o tamanho do vetor na condicional dinamico 
		for(int i = 0; i < lista.length; i++) {
			System.out.println(lista[i]);
		}
	}
}
