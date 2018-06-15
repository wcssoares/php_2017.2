package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entidade.Produto;

// ProdutoDAO herdara os m�todos de DAO

public class ProdutoDAO  extends DAO{
	
	private Connection conn;
	
	public ProdutoDAO() {
		// atribui a conex�o aberta ao atributo conn
		try {
			conn = abreConexao();
		} catch (SQLException e) {
			e.printStackTrace();
		}		
	}
	
	public void salvar(Produto p) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("insert into produto values (null, ?, ?)");
			
			stmt.setString(1,  p.getNome());
			stmt.setInt(2, p.getQuantidade());
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0)
				throw new SQLException("Erro ao gravar no banco");
		}finally {
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
	
	public  void atualizar(Produto p) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("Update Produto set nome = ? , Quantidade = ? where id = ?");
			
			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());
			stmt.setLong(3, p.getId());
			
			
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
		ProdutoDAO dao = new ProdutoDAO();
		
		Produto produto = new Produto();
		produto.setNome("iPhone 7");
		produto.setQuantidade(10);
		
		try {
			dao.salvar(produto);
			System.out.println("Produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
