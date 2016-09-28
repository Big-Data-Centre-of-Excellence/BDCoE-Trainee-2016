package Demo;

import Demo.States.LoadingState;
import Demo.States.Stage2State;
import Demo.States.State;

import javax.swing.*;
import java.awt.*;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.awt.image.BufferedImage;

/**
 * Created by Friends on 22-09-2016.
 */
public class Gamepanel extends JPanel implements KeyListener, MouseListener,Runnable {
    public static boolean gamePaused=false;
    public static State currentState;
    public static int score=0;
    public int count=0;
    public Gamepanel()
    {
        this.setPreferredSize(new Dimension(1000,500));
        this.setFocusable(true);
        this.addKeyListener(this);
        this.addMouseListener(this);

    }

    @Override
    public void addNotify() {
        super.addNotify();

        this.requestFocus();
        Resources.load();
        Gamepanel.currentState=new LoadingState();

        Thread thread=new Thread( this);
        thread.setName("game thread");
        thread.start();
    }

    public void keyTyped(KeyEvent e) {

    }


    public void keyPressed(KeyEvent e) {
        Gamepanel.currentState.keyPressed(e.getKeyCode());

    }


    public void keyReleased(KeyEvent e) {
        Gamepanel.currentState.keyReleased(e.getKeyCode());


    }


    public void mouseClicked(MouseEvent e) {

    }


    public void mousePressed(MouseEvent e) {
        Gamepanel.currentState.mousePressed(e.getX(),e.getY());

    }


    public void mouseReleased(MouseEvent e) {
        Gamepanel.currentState.mouseReleased(e.getX(),e.getY());

    }


    public void mouseEntered(MouseEvent e) {

    }


    public void mouseExited(MouseEvent e) {

    }


    public void run() {
        Graphics imageGraphics;
        Graphics panelGraphics;
        Image mainImage=new BufferedImage(1000,500,BufferedImage.TYPE_INT_RGB);

        while(true)
        {
            try {
                Thread.sleep(30);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }

            if(gamePaused)
                continue;

            if(Gamepanel.currentState instanceof Stage2State) {
                if (this.count % 10 == 0) {
                    score++;
                    this.count = 0;
                }
            }

            Gamepanel.currentState.update();
            imageGraphics=mainImage.getGraphics();
            imageGraphics.clearRect(0,0,1000,500);
            Gamepanel.currentState.render(imageGraphics);
            imageGraphics.dispose();

            panelGraphics=this.getGraphics();
            panelGraphics.drawImage(mainImage,0,0,null);
            panelGraphics.dispose();


            if(Gamepanel.currentState instanceof Stage2State)
            this.count++;



        }



    }
}
