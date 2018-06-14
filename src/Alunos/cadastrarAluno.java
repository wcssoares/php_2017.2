package Alunos;

import java.io.Serializable;


public class cadastrarAluno implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	private String nome;
	private String matricula;
	private int rg;
	private Long telefone;
	
	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getMatricula() {
		return matricula;
	}
	
	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}
	
	public Integer getRG() {
		return rg;
	}
	
	public void setRG(Integer rg) {
		this.rg = rg;
	}
	
	public Long getTelefone() {
		return telefone;
	}
	
	public void setTelefone(Long telefone) {
		this.telefone = telefone;
	}
}
