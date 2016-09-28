package Demo;

import javax.swing.*;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 * Created by Friends on 22-09-2016.
 */
public class Demo {
    public static Connection connection;
    public static void main(String[] args) {

        try {
            Class.forName("org.sqlite.JDBC");
            try {
                Demo.connection= DriverManager.getConnection("jdbc:sqlite:src/Demo/Bdc.sqlite");
            } catch (SQLException e) {
                e.printStackTrace();
            }
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }


        JFrame frame=new JFrame();
        Gamepanel panel=new Gamepanel();
        frame.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        frame.add(panel);
        frame.setResizable(false);
        frame.pack();
        frame.setVisible(true);

    }
}
