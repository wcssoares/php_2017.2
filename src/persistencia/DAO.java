package persistencia;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

// D.A.O - Data Access Object

public class DAO {

	public DAO() {
		try {
			// nome da classe de conex�o com o banco (MySQL)
			Class.forName("com.mysql.jdbc.Driver");
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		}
	}
	
	protected Connection abreConexao() throws SQLException {
		Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_aulajava10","root","");
		return conn;
	}
	
	public static void main(String[] args) {
		DAO dao = new DAO();
		try {
			dao.abreConexao();
			System.out.println("Conex�o aberta");
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println("Erro ao abrir a conex�o");
		}
	}
}
