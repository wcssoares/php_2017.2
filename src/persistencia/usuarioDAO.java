package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entidade.Produto;
import entidade.Usuario;

public class usuarioDAO extends DAO{
	
	private Connection conn;
	
	public usuarioDAO() {
		try {
			conn = abreConexao();
		} catch(SQLException e) {
			e.printStackTrace();
		}
	}
	
	public void salvar(Usuario u) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("insert into produto values (null, ?, ?)");
			stmt.setString(1, u.getNome());
			stmt.setString(2, u.getTelefone());
			stmt.setInt(3, u.getIdade());
			stmt.setDouble(4, u.getAltura());
			stmt.setString(5, u.getSexo());
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0)
				throw new SQLException("Erro ao gravar no banco");	
		} finally {
			if(conn != null) 
				conn.close();
			if(stmt != null) 
				stmt.close();
		}
	}
		
	public void excluir(long id) throws SQLException {
		PreparedStatement stmt = null;
			
		try {
			stmt = conn.prepareStatement("Delete from produto where id = ?");
			
			stmt.setLong(1, id);
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0)
				throw new SQLException("Houve um erro ao excluir o registro do banco.");		
		} finally {
			if(conn != null)
				conn.close();
			if(stmt != null)
				stmt.close();
		}
	}
	
	public  void atualizar(Usuario u) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("Update Usuario set nome = ? , telefone = ?, idade = ?, altura = ?, sexo = ? where id = ?");
			stmt.setString(1, u.getNome());
			stmt.setString(2, u.getTelefone());
			stmt.setInt(3, u.getIdade());
			stmt.setDouble(4, u.getAltura());
			stmt.setString(5, u.getSexo());
			stmt.setLong(6, u.getId());
			
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0)
				throw new SQLException("Erro ao atualizar o produto banco.");		
		} finally {
			if(conn != null) 
				conn.close();
			if(stmt != null) 
				stmt.close();	
		}
	}
	
	public static void main(String[] args) {
		usuarioDAO dao = new usuarioDAO();
		
		Usuario usuario = new Usuario();
		usuario.setNome("Willian");
		usuario.setTelefone("37084184");
		usuario.setIdade(21);
		usuario.setAltura(1.90);
		usuario.setSexo("Masculino");
		
		try {
			dao.salvar(usuario);
			System.out.println("Usuário salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
