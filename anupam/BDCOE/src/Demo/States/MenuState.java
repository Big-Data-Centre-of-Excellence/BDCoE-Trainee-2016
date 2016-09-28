package Demo.States;

import Demo.Demo;
import Demo.Gamepanel;
import Demo.Resources;

import java.awt.*;
import java.awt.event.KeyEvent;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 * Created by Friends on 22-09-2016.
 */
public class MenuState extends State {
    public static Statement statement;
    public int i = 0, j = 0;
    public Image[] images = {Resources.p1, Resources.p2, Resources.p3, Resources.p4, Resources.p5, Resources.p6, Resources.p7, Resources.p8};
    public Image[] volumes = {Resources.m1, Resources.m2};


    public int cnt=0,x=432;
    public static int a[]={0,0,0};
    public Image[] image={Resources.score0,Resources.score1,Resources.score2,Resources.score3,Resources.score4,Resources.score5,Resources.score6,Resources.score7,Resources.score8,Resources.score9};


    public void update() {

        if(this.cnt==0)
        {
           this.generate();
            this.cnt=1;
        }


    }

    @Override
    public void render(Graphics g) {
        g.drawImage(Resources.menu, 0, 0, null);

        g.drawImage(volumes[j], 950, 0, null);
        this.i = this.i % 8;
        g.drawImage(images[i], 44, 293, null);
        this.i++;


        this.x=432;
        for(int i=2;i>=0;i--)
        {
            g.drawImage(image[a[i]],this.x,148,null);
            this.x+=36;
        }
    }



    public void generate()
    {
        try {
            statement= Demo.connection.createStatement();
            ResultSet x=statement.executeQuery("SELECT * FROM Finale");
            x.next();
            int max=x.getInt("Score");
            int t;
            while(x.next()) {
                t=x.getInt("Score");
                if(t>max)
                    max=t;
            }
            System.out.println(max);
            int i=0;
            while(max>0)
            {
                a[i]=max%10;
                max=max/10;
                i++;
            }

        } catch (SQLException e) {
            e.printStackTrace();
        }
    }




    @Override
    public void keyPressed(int keyCode) {
        if (keyCode == KeyEvent.VK_ENTER)
            Gamepanel.currentState = new Stage1State();

    }

    @Override
    public void keyReleased(int keyCode) {

    }

    @Override
    public void mousePressed(int x, int y) {

        System.out.println(x);
        System.out.println(y);

        if (x > 732 && x < 943 && y > 149 && y < 218)
            Gamepanel.currentState = new Stage1State();


        if (x > 950 && x < 1000 && y > 0 && y < 40) {
            this.j++;
            this.j %= 2;
        }

    }

    @Override
    public void mouseReleased(int x, int y) {

    }
}
