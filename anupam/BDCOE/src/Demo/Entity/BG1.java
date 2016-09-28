package Demo.Entity;

import Demo.Resources;
import Demo.States.Stage1State;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class BG1 extends Entity {



    public BG1(int x, int y) {
        super(x, y);
        this.xvel=-10;

    }

    @Override
    public Image getImage() {
        return Resources.background;
    }

    @Override
    public int getWidth() {
        return 1000;
    }

    @Override
    public int getHeight() {
        return 500;
    }

    public void update()
    {
        super.update();
        if(this.x+1000<0)
            this.x=990;
    }
}
