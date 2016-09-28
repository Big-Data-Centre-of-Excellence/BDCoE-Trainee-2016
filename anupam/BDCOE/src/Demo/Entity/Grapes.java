package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Grapes extends Entity {
    public Grapes(int x, int y) {
        super(x, y);
        this.xvel=-10;
        this.xgenerator();
    }

    @Override
    public Image getImage() {
        return Resources.berries;
    }

    @Override
    public int getWidth() {
        return 30;
    }

    @Override
    public int getHeight() {
        return 42;
    }

    public void update()
    {
        super.update();
        if(this.x<0)
        {
            this.isHidden=false;
            this.xgenerator();
        }
    }

    public void xgenerator()
    {
        int r= Utility.generate(2);
        System.out.println("grapes r"+r);
        if(r==0)
            this.x=3000;
        if(r==1)
            this.x=5000;
        if(r==2)
        {
            this.x=7000;
            this.isHidden=true;
        }
    }
}
