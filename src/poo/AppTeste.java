package poo;

public class AppTeste {
	public static void main(String[] args) {
		/*
		 * Pessoa p - criação da referencia da Pessoa aonde o 'p' é essa referencia.
		 * 
		 * new Pessoa() - criação da instancia(Objeto), aonde utilizamos a palavra new
		 * para criar.
		 */

		/**
		 * @var p - Da acesso aos recursos da classe Pessoa
		 */
		Pessoa p = new Pessoa();

		p.setNome("Willian");
		p.setSexo("Masculino");
		p.setCorDaPele("Parda");
		p.setTitulo("Desenvolvedor");
		p.setIdade(21);
		p.setPeso(70.0);
		p.setAltura(1.90);

		System.out.println(p.getNome() + "\n" + p.getSexo() + "\n" + p.getCorDaPele() + "\n" +  p.getTitulo() + "\n" + p.getIdade() + "\n" + p.getPeso()
				+ "\n" + p.getAltura());
	}
}
