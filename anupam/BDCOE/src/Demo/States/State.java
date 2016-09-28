package Demo.States;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
abstract public class State {
    abstract public void update();
    abstract public void render(Graphics g);
    abstract public void keyPressed(int keyCode);
    abstract public void keyReleased(int keyCode);
    abstract public void mousePressed(int x,int y);
    abstract public void mouseReleased(int x,int y);
}
