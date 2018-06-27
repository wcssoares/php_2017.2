package model;

import java.io.Serializable;

public abstract class Pessoa implements Serializable {
	
	
    private long id;
	private String nome;
	private String cpf;
	private Telefone telefone = new Telefone();
	private Endereco endereco;
	
	// ctrl + espaço
	public Pessoa() {
		
	}
	
	// construtores -> alt + shift + S + O
	public Pessoa(long id, String nome, String cpf, String telefone, Endereco endereco) {
		this.id = id;
		this.nome = nome;
		this.cpf = cpf;
		this.telefone.setTelefone(telefone);
		this.endereco = endereco;
	}
	
	public Pessoa(String nome, String cpf,String telefone,Endereco endereco) {
		
		this.nome = nome;
		this.cpf = cpf;
		this.telefone.setTelefone(telefone);
		this.endereco = endereco;
	}
	
	// gets e sets -> alt + shift + S + R


	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
	}

	public String getTelefone() {
		return telefone.getTelefone();
	}

	public void setTelefone(String telefone) {
		this.telefone.setTelefone(telefone);
	}
	
	public Endereco getEndereco() {
		return endereco;
	}
	
	public void setEndereco(Endereco endereco) {
		this.endereco.setEndereco(endereco);
	}

	
	// hashCode e equals -> alt + shift + S + H
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((cpf == null) ? 0 : cpf.hashCode());
		result = prime * result + (int) (id ^ (id >>> 32));
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Pessoa other = (Pessoa) obj;
		if (cpf == null) {
			if (other.cpf != null)
				return false;
		} else if (!cpf.equals(other.cpf))
			return false;
		if (id != other.id)
			return false;
		return true;
	}
	
	// toString() -> alt + shift + S + S
	@Override
	public String toString() {
		return "Pessoa [id=" + id + ", nome=" + nome + ", cpf=" + cpf + ", telefone=" + telefone.getTelefone() + "]";
	}	
}
