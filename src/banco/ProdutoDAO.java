package banco;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import modelo.Administrador;
import modelo.Produto;

public class ProdutoDAO {
	
	private Connection conn;
	
	public ProdutoDAO() {
		conn = new FabricaDeConexao().pegaConexao();		
	}
	
	public void gravar(Produto p) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conn.prepareStatement("insert into produto values(null, ?, ?, ?, ?, ?");

			stmt.setString(1, p.getNmProduto());
			stmt.setString(2, p.getDescProduto());
			stmt.setInt(3, p.getQuantidade());
			stmt.setDouble(4, p.getPreco());
			stmt.setString(5, p.getImg());

			stmt.executeUpdate();
		} finally {
			if (stmt != null)
				stmt.close();
			if (conn != null)
				conn.close();
		}
	}
	
	public void alterar(Produto p) throws SQLException {
		
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("update produto set nmProduto = ?, descProduto = ?, quantidade = ?, preco = ?, img = ? where id = ?");
			stmt.setString(1, p.getNmProduto());
			stmt.setString(2, p.getDescProduto());
			stmt.setInt(3, p.getQuantidade());
			stmt.setDouble(4, p.getPreco());
			stmt.setString(5, p.getImg());
			stmt.setLong(6, p.getId());
			
			stmt.executeUpdate();
			
		} finally {
			if (stmt != null)
				stmt.close();
			if (conn != null)
				conn.close();
		}
		
		
		
	}
}
