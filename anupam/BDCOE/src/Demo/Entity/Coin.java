package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Coin extends Entity {
    public Image[] images={Resources.c1,Resources.c2};
    public int i=0;
    public Coin(int x, int y) {
        super(x, y);
        this.xvel=-10;
        this.xgenerator();
    }

    @Override
    public Image getImage() {
        return images[this.i];
    }

    @Override
    public int getWidth() {
        return 30;
    }

    @Override
    public int getHeight() {
        return 30;
    }

    public void update()
    {
        super.update();
        if(this.x<0)
        {
            this.isHidden=false;
            this.xgenerator();
            this.i++;
            this.i=this.i%2;
        }

    }

    public void xgenerator()
    {
        int r= Utility.generate(3);
        System.out.println("coin r"+r);
        if(r==0)
            this.x=4500;
        if(r==1)
            this.x=6500;
        if(r==2)
        {
            this.x=6500;
            this.isHidden=true;
        }
    }
}
