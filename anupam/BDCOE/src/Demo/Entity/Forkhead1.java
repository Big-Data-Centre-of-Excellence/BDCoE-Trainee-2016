package Demo.Entity;

import Demo.Resources;

import java.awt.*;

/**
 * Created by Friends on 23-09-2016.
 */
public class Forkhead1 extends Entity {
    public Forkhead1(int x, int y) {
        super(x, y);
        this.xvel=-10;
    }

    @Override
    public Image getImage() {
        return Resources.fork_head;
    }

    @Override
    public int getWidth() {
        return 33;
    }

    @Override
    public int getHeight() {
        return 59;
    }

    public void update()
    {
        super.update();
        if(Fork1.showFork1==true)
            this.isHidden=true;

        if(this.x<0) {
            this.isHidden = false;
            this.x = 2406;
        }
        this.y1randomisation();

        this.setBound();

          }

    public void y1randomisation()
    {
        if(Fork1.r==0)
            this.y=140;
        if(Fork1.r==1)
            this.y=132;
        if(Fork1.r==2)
            this.y=147;
    }
}
