package entidade;

import java.io.Serializable;

public class Usuario implements Serializable {

	private static final long serialVersionUID = 1L;

	private long id;
	private String nome;
	private String telefone;
	private int idade;
	private double altura;
	private String sexo;
	
	public Usuario() {
		// TODO Auto-generated constructor stub
	}

	public Usuario(long id,String nome, String telefone, int idade, double altura, String sexo) {
		this.id = id;
		this.nome = nome;
		this.telefone = telefone;
		this.idade = idade;
		this.altura = altura;
		this.sexo = sexo;
	}
	
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

	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}

	public String getTelefone() {
		return telefone;
	}

	public void setIdade(int idade) {
		this.idade = idade;
	}

	public int getIdade() {
		return idade;
	}

	public void setAltura(double altura) {
		this.altura = altura;
	}

	public double getAltura() {
		return altura;
	}

	public void setSexo(String sexo) {
		this.sexo = sexo;
	}

	public String getSexo() {
		return sexo;
	}

	@Override
	public String toString() {
		return id+", " +nome + ", " + telefone + ", " + idade + ", " + altura + ", " + sexo;
	}

	public static void main(String[] args) {

		Usuario a1 = new Usuario(1,"Willian", "37084184", 21, 1.90, "Masculino");
		System.out.println(a1);
	}
}
