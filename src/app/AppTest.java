package app;

import entidade.Cliente;

public class AppTest {
	public static void main(String[] args) {
		Cliente cliente; //referencia do objeto
		cliente = new Cliente(); //criação da instancia do objeto
		
		cliente.setId(1);
		cliente.setNome("Willian Soares");
		cliente.setEmail("willian@gmail.com");
		
		System.out.println(cliente.getNome());
	}              	
}
