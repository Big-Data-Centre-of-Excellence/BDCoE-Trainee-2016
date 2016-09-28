package Demo.States;

import Demo.Entity.*;
import Demo.Gamepanel;
import Demo.Resources;

import java.awt.*;
import java.awt.event.KeyEvent;
import java.util.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Stage1State extends State {
    public int i = 0;
    public Image[] images = {Resources.p1, Resources.p2, Resources.p3, Resources.p4, Resources.p5, Resources.p6, Resources.p7, Resources.p8};

    @Override
    public void update() {

    }

    @Override
    public void render(Graphics g) {
        g.drawImage(Resources.background,0,0,null);
        g.drawImage(Resources.ground,0,0,null);
        g.drawImage(Resources.log,39,339,null);
        this.i = this.i % 8;
        g.drawImage(images[i], 33, 293, null);
        this.i++;



    }

    @Override
    public void keyPressed(int keyCode) {

        if(keyCode==KeyEvent.VK_UP) {
            Stage2State.count=1;
            Resources.game.loop();
            Gamepanel.currentState = new Stage2State();

        }
    }

    @Override
    public void keyReleased(int keyCode) {

    }

    @Override
    public void mousePressed(int x, int y) {
        if(x>0&&x<1000&&y>0&&y<500){
            Resources.game.loop();
            Gamepanel.currentState=new Stage2State();}

    }

    @Override
    public void mouseReleased(int x, int y) {

    }
}
