package jdcb;

import java.sql.*;

public class flightdata{

	public static void main(String[] args) {
		
		try{
			Connection myConn = DriverManager.getConnection("jdbc:mysql://localhost:3306/flightdata", "root", "Miguel");
			
			Statement stat = myConn.createStatement();
			
			ResultSet res = stat.executeQuery("select * from airlines");
				
			while (res.next()){
				System.out.println(res.getString("airportcode") + ", " + res.getString("city"));
			}
		}
		catch (Exception exc){
			exc.printStackTrace();
		}
	}

}
