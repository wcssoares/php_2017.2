package model;

public class TestePessoa {
	// main() -> escreve main + ctrl + espaço
	// identar o código -> ctrl + shift + F
	public static void main(String[] args) {
		Pessoa willian = new Cliente();
		willian.setId(1);
		willian.setNome("Willian");
		willian.setCpf("123.456.789-00");
		
		Pessoa joao = new Cliente();
		joao.setId(1);
		joao.setNome("Willian");
		joao.setCpf("123.456.789-00");
		
		Pessoa ronaldo = willian;
		ronaldo.setId(1);
		ronaldo.setNome("Willian");
		ronaldo.setCpf("123.456.789-00");
		
		if (willian.equals(joao))
			System.out.println("É João");
		else if(willian.equals(ronaldo))
			System.out.println("É João");
		else
			System.out.println(" Não é o João");
	}
}
