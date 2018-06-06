package vetores;

public class Aritmetica {
	
	/**
	 *  @param ...numeros - � uma defini��o de vetor como par�metro
	 **/
	
	public double somar(double ...valores) {
		
		double resultado = 0;
		
		for (double v : valores) {
			resultado += v;
		}
		
		//System.out.println("O total �: " + resultado);
		return resultado;
	}
	
	public double subtr(double ...valores) {
		
			double resultado = valores[0];
		
			for (int i = 1; i < valores.length; i++) {
				resultado -= valores[i];
			}
		
			//System.out.println("O total �: " + resultado);
			return resultado;
	}
	
	public double multiplicacao(double ...valores) {
		
		double resultado = 1;
	
		for (double v : valores) {
			resultado *= v;
		}
	
		//System.out.println("O total �: " + resultado);
		return resultado;
	}	


	public double divisao(double ...valores) {
	
		double resultado = valores[0];

		for (int i = 1; i < valores.length; i++) {
			resultado /= valores[i];
		}

		//System.out.println("O total �: " + resultado);
		return resultado;
	}
}
