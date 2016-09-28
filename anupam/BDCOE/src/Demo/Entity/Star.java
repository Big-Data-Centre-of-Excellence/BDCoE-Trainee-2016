package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Star extends Entity {
    public Star(int x, int y) {
        super(x, y);
        this.xvel=-10;
        this.xgenerator();
    }

    @Override
    public Image getImage() {
        return Resources.star;
    }

    @Override
    public int getWidth() {
        return 41;
    }

    @Override
    public int getHeight() {
        return 39;
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
        int r;
        r= Utility.generate(3);
        System.out.println(r);
        if(r==0)
            this.x=2000;
        if(r==1)
            this.x=5000;
        if(r==2)
        {
            this.isHidden=true;
            this.x=5000;
        }


    }
}
