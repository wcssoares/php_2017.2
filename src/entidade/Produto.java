package entidade;

import java.io.Serializable;

public class Produto implements Serializable {
	
	private static final long serialVersionUID = 1L;
		
	private long id;
	private String nome;
	private int quantidade;
	
	// construtor sem argumentos(construtor vazio)
	public Produto() {
		super();
	}
	
	// construtor com argumentos(construtor cheio)
	public Produto(long id, String nome, int quantidade) {
		this.id = id;
		this.nome = nome;
		this.quantidade = quantidade;
	}
	
	// m�todos de encapsulamento (gets e sets)
	
	public void setId(long id) {
		this.id = id;
	}
	
	public long getId() {
		return id;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getNome() {
		return nome;
	}
	
	
	public void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}
	
	public int getQuantidade() {
		return quantidade;
	}
	
	// sobrescrita
	
	@Override
	public String toString() {
		return id + ", " +nome +", " + quantidade;  
	}
    
	
	public static void main(String[] args) {
		// utilizando o construtor sem argumentos
		Produto p1 = new Produto();
		// utilizando o construtor com argumentos
		Produto p2 = new Produto(1, "Camisa", 10);
		
		System.out.println(p2);
	}
}

