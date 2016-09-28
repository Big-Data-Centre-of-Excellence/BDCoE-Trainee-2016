package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 25-09-2016.
 */
public class pakia1 extends Entity {
    public int i=0;

    public Image[] images = {Resources.p1, Resources.p2, Resources.p3, Resources.p4, Resources.p5, Resources.p6, Resources.p7, Resources.p8};

    public pakia1(int x, int y) {
        super(x, y);
        this.isHidden=true;
    }

    @Override
    public Image getImage() {
        this.i++;
        this.i=this.i%8;
        return images[i];
    }

    @Override
    public int getWidth() {
        return 60;
    }

    @Override
    public int getHeight() {
        return 59;
    }

    public void update()
    {
        super.update();
        if(this.isHidden==false)
        {
            this.xvel=10;
            this.ygenerator();
        }

        if(this.x>1000)
        {
            this.isHidden=true;
            this.xvel=0;
            this.x=500;
            this.y=190;
        }
    }

    public void ygenerator()
    {
        int s= Utility.generate(2);
        if(s==0)
            this.y-=10;
        if(s==1)
            this.y=this.y+10;

    }
}
