package Demo.States;

import Demo.Demo;
import Demo.Gamepanel;
import Demo.Resources;

import java.awt.*;
import java.awt.event.KeyEvent;
import java.sql.SQLException;

/**
 * Created by Friends on 22-09-2016.
 */
public class LastState extends State {


    public int a[]={0,0,0};
    public int i=0,x=355,cntt=0,xh=0;

    public int lastScore=0;

    public Image[] image={Resources.score0,Resources.score1,Resources.score2,Resources.score3,Resources.score4,Resources.score5,Resources.score6,Resources.score7,Resources.score8,Resources.score9};


    public void update() {

        if(this.cntt==0) {
            this.lastScore=Gamepanel.score;
           this.scoreGenerator();
            this.cntt=1;
        }


    }


    public void render(Graphics g) {
        g.drawImage(Resources.restart,0,0,null);

        this.x=355;
        for(int j=this.i-1;j>=0;j--)
        {
            g.drawImage(image[a[j]],this.x,187,null);
            this.x=this.x+36;
        }

        this.xh=355;
        for(int j=2;j>=0;j--)
        {
            g.drawImage(image[MenuState.a[j]],this.xh,142,null);
            this.xh+=36;
        }
    }


    public void keyPressed(int keyCode) {
        if(keyCode== KeyEvent.VK_ENTER) {
         //   Gamepanel.score=0;
            Gamepanel.currentState = new LoadingState();
        }

    }


    public void keyReleased(int keyCode) {

    }


    public void mousePressed(int x, int y) {
//        System.out.println(x);
  //      System.out.println(y);

        if(x>732&&x<940&&y>153&&y<219)
        {
         //   Gamepanel.score=0;
            Gamepanel.currentState=new LoadingState();
        }

        if(x>727&&x<945&&y>239&&y<291)
        {


            String sql="INSERT INTO Finale VALUES ("+this.lastScore+")";

            try {
                MenuState.statement=Demo.connection.createStatement();
                MenuState.statement.execute(sql);
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }

        if(x>738&&x<937&&y>321&&y<381)
        {
            System.exit(0);
        }




    }

    @Override
    public void mouseReleased(int x, int y) {

    }

    public void scoreGenerator()
    {

        while(Gamepanel.score>0)
        {
            a[i]=Gamepanel.score%10;
            Gamepanel.score=Gamepanel.score/10;
            i++;
        }
    }
}
