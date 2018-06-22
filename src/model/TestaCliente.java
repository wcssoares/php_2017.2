package model;

public class TestaCliente {
	
	public static void main(String[] args) {
		//cliente sem polimorfismo
		Cliente cliente = new Cliente();
		cliente.setNome("Marcelo 71");
		
		//Polimorfismo
		Pessoa cliente2 = new Cliente();
	}
}
