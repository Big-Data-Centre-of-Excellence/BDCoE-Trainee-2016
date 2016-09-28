package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Branch1 extends Entity {
    public Branch1(int x, int y) {
        super(x, y);
        this.xvel=-10;
        this.ygenerator();
    }

    @Override
    public Image getImage() {
        return Resources.branch;
    }

    @Override
    public int getWidth() {
        return 31;
    }

    @Override
    public int getHeight() {
        return 500;
    }

    public void update()
    {
        super.update();
        if(this.x<0) {
            this.isHidden=false;
            this.x = 2400;
            this.ygenerator();
        }

        this.setBound();

    }

    public void ygenerator()
    {
        int r;
        r= Utility.generate(2);
     //   System.out.println(r);
        if(r==0)
            this.y=-250;
        else
            this.y=-240;
    }
}
