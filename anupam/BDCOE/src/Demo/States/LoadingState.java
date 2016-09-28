package Demo.States;

import Demo.Gamepanel;
import Demo.Resources;

import java.awt.*;
import java.awt.event.KeyEvent;

/**
 * Created by Friends on 22-09-2016.
 */
public class LoadingState extends  State {
    private int x=353;
    @Override
    public void update() {
        this.x-=2;
        if(this.x<0)
        {
            Gamepanel.currentState=new MenuState();
        }


    }

    @Override
    public void render(Graphics g) {
        g.drawImage(Resources.wasted,0,0,null);
        g.setColor(Color.yellow);
        g.fillRect(285,250,this.x,16);
    }

    @Override
    public void keyPressed(int keyCode) {
        if(keyCode== KeyEvent.VK_ENTER)
            Gamepanel.currentState=new MenuState();

    }

    @Override
    public void keyReleased(int keyCode) {

    }

    @Override
    public void mousePressed(int x, int y) {

        System.out.println(x);
        System.out.println(y);

    }

    @Override
    public void mouseReleased(int x, int y) {

    }
}
